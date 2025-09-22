import React, { useState, useEffect } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, ActivityIndicator } from 'react-native';
import { useRoute } from '@react-navigation/native';
import { authService } from '../../services/auth';
import { ROUTES } from '../../constants/routes';

const ConfirmEmailScreen = ({ navigation }) => {
  const route = useRoute();
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState('');
  const [success, setSuccess] = useState(false);

  // Get token from route params
  const token = route.params?.token || '';

  useEffect(() => {
    const verifyEmail = async () => {
      if (!token) {
        setError('Invalid verification link');
        setIsLoading(false);
        return;
      }

      try {
        await authService.verifyEmail(token);
        setSuccess(true);
      } catch (error) {
        setError(error.response?.data?.message || 'Failed to verify email');
      } finally {
        setIsLoading(false);
      }
    };

    verifyEmail();
  }, [token]);

  const handleResendVerification = async () => {
    setIsLoading(true);
    setError('');
    
    try {
      // You might need to get the email from route params or store it somewhere
      const email = route.params?.email || '';
      if (email) {
        await authService.resendVerification(email);
        setError('Verification email sent. Please check your inbox.');
      } else {
        setError('Email not available. Please try signing up again.');
      }
    } catch (error) {
      setError(error.response?.data?.message || 'Failed to resend verification email');
    } finally {
      setIsLoading(false);
    }
  };

  if (isLoading) {
    return (
      <View style={styles.container}>
        <ActivityIndicator size="large" color="#007AFF" />
        <Text style={styles.loadingText}>Verifying your email...</Text>
      </View>
    );
  }

  return (
    <View style={styles.container}>
      {success ? (
        <>
          <Text style={styles.successIcon}>✓</Text>
          <Text style={styles.title}>Email Verified!</Text>
          <Text style={styles.subtitle}>
            Your email has been successfully verified. You can now login to your account.
          </Text>
          <TouchableOpacity
            style={styles.button}
            onPress={() => navigation.navigate(ROUTES.LOGIN)}
          >
            <Text style={styles.buttonText}>Continue to Login</Text>
          </TouchableOpacity>
        </>
      ) : (
        <>
          <Text style={styles.errorIcon}>✗</Text>
          <Text style={styles.title}>Verification Failed</Text>
          <Text style={styles.subtitle}>{error}</Text>
          
          <TouchableOpacity
            style={[styles.button, styles.resendButton]}
            onPress={handleResendVerification}
            disabled={isLoading}
          >
            <Text style={styles.buttonText}>
              {isLoading ? 'Sending...' : 'Resend Verification Email'}
            </Text>
          </TouchableOpacity>
          
          <TouchableOpacity
            style={styles.secondaryButton}
            onPress={() => navigation.navigate(ROUTES.LOGIN)}
          >
            <Text style={styles.secondaryButtonText}>Back to Login</Text>
          </TouchableOpacity>
        </>
      )}
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    padding: 20,
    backgroundColor: '#fff',
  },
  loadingText: {
    marginTop: 16,
    fontSize: 16,
    color: '#666',
  },
  successIcon: {
    fontSize: 64,
    color: 'green',
    marginBottom: 24,
  },
  errorIcon: {
    fontSize: 64,
    color: 'red',
    marginBottom: 24,
  },
  title: {
    fontSize: 24,
    fontWeight: 'bold',
    textAlign: 'center',
    marginBottom: 16,
  },
  subtitle: {
    fontSize: 16,
    textAlign: 'center',
    color: '#666',
    marginBottom: 32,
    lineHeight: 24,
  },
  button: {
    backgroundColor: '#007AFF',
    padding: 16,
    borderRadius: 8,
    minWidth: 200,
    alignItems: 'center',
    marginBottom: 16,
  },
  resendButton: {
    backgroundColor: '#FF9500',
  },
  buttonText: {
    color: '#fff',
    fontSize: 16,
    fontWeight: 'bold',
  },
  secondaryButton: {
    padding: 16,
  },
  secondaryButtonText: {
    color: '#007AFF',
    fontSize: 16,
  },
});

export default ConfirmEmailScreen;