import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, KeyboardAvoidingView, Platform } from 'react-native';
import { authService } from '../../services/auth';
import AuthForm from '../../components/auth/AuthForm';

const ForgotPasswordScreen = ({ navigation }) => {
  const [isLoading, setIsLoading] = useState(false);
  const [error, setError] = useState('');
  const [successMessage, setSuccessMessage] = useState('');

  const forgotPasswordFields = [
    {
      name: 'email',
      label: 'Email',
      required: true,
      keyboardType: 'email-address',
      autoCapitalize: 'none',
      validation: (value) => /\S+@\S+\.\S+/.test(value),
      errorMessage: 'Please enter a valid email address',
    },
  ];

  const handleForgotPassword = async (formData) => {
    setIsLoading(true);
    setError('');
    setSuccessMessage('');
    
    try {
      await authService.forgotPassword(formData.email);
      setSuccessMessage('Password reset instructions have been sent to your email.');
    } catch (error) {
      setError(error.response?.data?.message || 'Failed to send reset instructions');
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
        <Text style={styles.title}>Forgot Password</Text>
        <Text style={styles.subtitle}>
          Enter your email address and we'll send you instructions to reset your password.
        </Text>

        {error ? <Text style={styles.errorText}>{error}</Text> : null}
        {successMessage ? <Text style={styles.successText}>{successMessage}</Text> : null}

        <AuthForm
          fields={forgotPasswordFields}
          onSubmit={handleForgotPassword}
          submitButtonText="Send Instructions"
          isLoading={isLoading}
          showPasswordToggle={false}
        />

        <TouchableOpacity
          style={styles.backToLogin}
          onPress={() => navigation.goBack()}
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

export default ForgotPasswordScreen;