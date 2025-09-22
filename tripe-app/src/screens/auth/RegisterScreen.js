import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, KeyboardAvoidingView, Platform, ScrollView } from 'react-native';
import { useAuth } from '../../contexts/AuthContext';
import AuthForm from '../../components/auth/AuthForm';
import SocialLogin from '../../components/auth/SocialLogin';
import { ROUTES } from '../../constants/routes';

const RegisterScreen = ({ navigation }) => {
  const { register } = useAuth();
  const [isLoading, setIsLoading] = useState(false);
  const [error, setError] = useState('');
  const [successMessage, setSuccessMessage] = useState('');

  const registerFields = [
    {
      name: 'firstName',
      label: 'First Name',
      required: true,
      autoCapitalize: 'words',
    },
    {
      name: 'lastName',
      label: 'Last Name',
      required: true,
      autoCapitalize: 'words',
    },
    {
      name: 'email',
      label: 'Email',
      required: true,
      keyboardType: 'email-address',
      autoCapitalize: 'none',
      validation: (value) => /\S+@\S+\.\S+/.test(value),
      errorMessage: 'Please enter a valid email address',
    },
    {
      name: 'password',
      label: 'Password',
      required: true,
      secureText: true,
      validation: (value) => value.length >= 6,
      errorMessage: 'Password must be at least 6 characters',
    },
    {
      name: 'confirmPassword',
      label: 'Confirm Password',
      required: true,
      secureText: true,
      validation: (value, allValues) => value === allValues.password,
      errorMessage: 'Passwords do not match',
    },
  ];

  const handleRegister = async (formData) => {
    setIsLoading(true);
    setError('');
    setSuccessMessage('');
    
    // Remove confirmPassword from the data sent to the server
    const { confirmPassword, ...registerData } = formData;
    
    const result = await register(registerData);
    
    if (result.success) {
      setSuccessMessage('Registration successful! Please check your email to verify your account.');
      // Optionally auto-navigate to login after a delay
      setTimeout(() => {
        navigation.navigate(ROUTES.LOGIN);
      }, 3000);
    } else {
      setError(result.message);
    }
    
    setIsLoading(false);
  };

  const handleGoogleLogin = () => {
    // Implement Google login
    console.log('Google login');
  };

  const handleAppleLogin = () => {
    // Implement Apple login
    console.log('Apple login');
  };

  return (
    <KeyboardAvoidingView
      style={styles.container}
      behavior={Platform.OS === 'ios' ? 'padding' : 'height'}
    >
      <ScrollView contentContainerStyle={styles.scrollContent}>
        <View style={styles.content}>
          <Text style={styles.title}>Create Account</Text>
          <Text style={styles.subtitle}>Sign up to get started</Text>

          {error ? <Text style={styles.errorText}>{error}</Text> : null}
          {successMessage ? <Text style={styles.successText}>{successMessage}</Text> : null}

          <AuthForm
            fields={registerFields}
            onSubmit={handleRegister}
            submitButtonText="Sign Up"
            isLoading={isLoading}
          />

          <SocialLogin
            onGooglePress={handleGoogleLogin}
            onApplePress={handleAppleLogin}
            isLoading={isLoading}
          />

          <View style={styles.footer}>
            <Text style={styles.footerText}>Already have an account? </Text>
            <TouchableOpacity onPress={() => navigation.navigate(ROUTES.LOGIN)}>
              <Text style={styles.footerLink}>Sign In</Text>
            </TouchableOpacity>
          </View>
        </View>
      </ScrollView>
    </KeyboardAvoidingView>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
  },
  scrollContent: {
    flexGrow: 1,
    justifyContent: 'center',
  },
  content: {
    padding: 20,
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
  footer: {
    flexDirection: 'row',
    justifyContent: 'center',
    marginTop: 24,
  },
  footerText: {
    color: '#666',
  },
  footerLink: {
    color: '#007AFF',
    fontWeight: 'bold',
  },
});

export default RegisterScreen;