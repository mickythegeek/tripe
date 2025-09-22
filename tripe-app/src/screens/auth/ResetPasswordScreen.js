import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, KeyboardAvoidingView, Platform } from 'react-native';
import { useRoute } from '@react-navigation/native';
import { authService } from '../../services/auth';
import AuthForm from '../../components/auth/AuthForm';

const ResetPasswordScreen = ({ navigation }) => {
  const route = useRoute();
  const [isLoading, setIsLoading] = useState(false);
  const [error, setError] = useState('');
  const [successMessage, setSuccessMessage] = useState('');

  // Get token from route params or query string
  const token = route.params?.token || '';

  const resetPasswordFields = [
    {
      name: 'newPassword',
      label: 'New Password',
      required: true,
      secureText: true,
      validation: (value) => value.length >= 6,
      errorMessage: 'Password must be at least 6 characters',
    },
    {
      name: 'confirmPassword',
      label: 'Confirm New Password',
      required: true,
      secureText: true,
      validation: (value, allValues) => value === allValues.newPassword,
      errorMessage: 'Passwords do not match',
    },
  ];

  const handleResetPassword = async (formData) => {
    setIsLoading(true);
    setError('');
    setSuccessMessage('');
    
    try {
      await authService.resetPassword(token, formData.newPassword);
      setSuccessMessage('Password has been reset successfully. You can now login with your new password.');
      
      // Navigate to login after a delay
      setTimeout(() => {
        navigation.navigate('Login');
      }, 3000);
    } catch (error) {
      setError(error.response?.data?.message || 'Failed to reset password');
    } finally {
      setIsLoading(false);
    }
  };

  return (
    <KeyboardAvoidingView
      style={styles.container}
      behavior={Platform.OS === 'ios' ? 'padding' : 'height'}
    >
      <View style={styles.content}>
        <Text style={styles.title}>Reset Password</Text>
        <Text style={styles.subtitle}>Enter your new password below.</Text>

        {error ? <Text style={styles.errorText}>{error}</Text> : null}
        {successMessage ? <Text style={styles.successText}>{successMessage}</Text> : null}

        <AuthForm
          fields={resetPasswordFields}
          onSubmit={handleResetPassword}
          submitButtonText="Reset Password"
          isLoading={isLoading}
        />

        <TouchableOpacity
          style={styles.backToLogin}
          onPress={() => navigation.navigate('Login')}
        >
          <Text style={styles.backToLoginText}>Back to Login</Text>
        </TouchableOpacity>
      </View>
    </KeyboardAvoidingView>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
  },
  content: {
    flex: 1,
    padding: 20,
    justifyContent: 'center',
  },
  title: {
    fontSize: 28,
    fontWeight: 'bold',
    textAlign: 'center',
    marginBottom: 8,
  },
  subtitle: {
    fontSize: 16,
    textAlign: 'center',
    color: '#666',
    marginBottom: 32,
  },
  errorText: {
    color: 'red',
    textAlign: 'center',
    marginBottom: 16,
  },
  successText: {
    color: 'green',
    textAlign: 'center',
    marginBottom: 16,
  },
  backToLogin: {
    alignSelf: 'center',
    marginTop: 24,
  },
  backToLoginText: {
    color: '#007AFF',
    fontSize: 16,
  },
});

export default ResetPasswordScreen;