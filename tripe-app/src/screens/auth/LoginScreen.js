import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, KeyboardAvoidingView, Platform } from 'react-native';
import { useAuth } from '../../contexts/AuthContext';
import AuthForm from '../../components/auth/AuthForm';
import SocialLogin from '../../components/auth/SocialLogin';
import { ROUTES } from '../../constants/routes';

const LoginScreen = ({ navigation }) => {
  const { login } = useAuth();
  const [isLoading, setIsLoading] = useState(false);
  const [error, setError] = useState('');

  const loginFields = [
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
    },
  ];

  const handleLogin = async (formData) => {
    setIsLoading(true);
    setError('');
    
    const result = await login(formData);
    
    if (!result.success) {
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
      <View style={styles.content}>
        <Text style={styles.title}>Welcome Back</Text>
        <Text style={styles.subtitle}>Sign in to your account</Text>

        {error ? <Text style={styles.errorText}>{error}</Text> : null}

        <AuthForm
          fields={loginFields}
          onSubmit={handleLogin}
          submitButtonText="Sign In"
          isLoading={isLoading}
        />

        <TouchableOpacity
          style={styles.forgotPassword}
          onPress={() => navigation.navigate(ROUTES.FORGOT_PASSWORD)}
        >
          <Text style={styles.forgotPasswordText}>Forgot Password?</Text>
        </TouchableOpacity>

        <SocialLogin
          onGooglePress={handleGoogleLogin}
          onApplePress={handleAppleLogin}
          isLoading={isLoading}
        />

        <View style={styles.footer}>
          <Text style={styles.footerText}>Don't have an account? </Text>
          <TouchableOpacity onPress={() => navigation.navigate(ROUTES.REGISTER)}>
            <Text style={styles.footerLink}>Sign Up</Text>
          </TouchableOpacity>
        </View>
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
  forgotPassword: {
    alignSelf: 'flex-end',
    marginTop: 8,
    marginBottom: 24,
  },
  forgotPasswordText: {
    color: '#007AFF',
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

export default LoginScreen;