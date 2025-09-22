import React from 'react';
import { View, TouchableOpacity, Text, StyleSheet } from 'react-native';
import { Google, Apple } from 'lucide-react-native';

const SocialLogin = ({ onGooglePress, onApplePress, isLoading = false }) => {
  return (
    <View style={styles.container}>
      <View style={styles.divider}>
        <View style={styles.dividerLine} />
        <Text style={styles.dividerText}>Or continue with</Text>
        <View style={styles.dividerLine} />
      </View>
      
      <View style={styles.socialButtons}>
        <TouchableOpacity
          style={[styles.socialButton, isLoading && styles.socialButtonDisabled]}
          onPress={onGooglePress}
          disabled={isLoading}
        >
          <Google size={20} color="#DB4437" />
          <Text style={styles.socialButtonText}>Google</Text>
        </TouchableOpacity>
        
        <TouchableOpacity
          style={[styles.socialButton, isLoading && styles.socialButtonDisabled]}
          onPress={onApplePress}
          disabled={isLoading}
        >
          <Apple size={20} color="#000" />
          <Text style={styles.socialButtonText}>Apple</Text>
        </TouchableOpacity>
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    width: '100%',
    marginTop: 24,
  },
  divider: {
    flexDirection: 'row',
    alignItems: 'center',
    marginBottom: 24,
  },
  dividerLine: {
    flex: 1,
    height: 1,
    backgroundColor: '#ddd',
  },
  dividerText: {
    marginHorizontal: 16,
    color: '#666',
  },
  socialButtons: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    gap: 12,
  },
  socialButton: {
    flex: 1,
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'center',
    borderWidth: 1,
    borderColor: '#ddd',
    padding: 12,
    borderRadius: 8,
    gap: 8,
  },
  socialButtonDisabled: {
    opacity: 0.5,
  },
  socialButtonText: {
    fontSize: 14,
    fontWeight: '500',
  },
});

export default SocialLogin;