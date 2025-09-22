import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import { useAuth } from '../contexts/AuthContext';
import { ROUTES } from '../constants/routes';

// Screens
import SplashScreen from '../screens/SplashScreen';
import OnboardingScreen from '../screens/OnboardingScreen';
import LoginScreen from '../screens/auth/LoginScreen';
import RegisterScreen from '../screens/auth/RegisterScreen';
import ForgotPasswordScreen from '../screens/auth/ForgotPasswordScreen';
import ResetPasswordScreen from '../screens/auth/ResetPasswordScreen';
import ConfirmEmailScreen from '../screens/auth/ConfirmEmailScreen';
import AgentTabs from './AgentTabs';
import AdminStack from './AdminStack';

const Stack = createStackNavigator();

const AppNavigator = () => {
  const { isAuthenticated, user, isLoading } = useAuth();

  if (isLoading) {
    return <SplashScreen />;
  }

  return (
    <NavigationContainer>
      <Stack.Navigator
        screenOptions={{
          headerShown: false,
          animationEnabled: true,
        }}
        initialRouteName={ROUTES.SPLASH}
      >
        {!isAuthenticated ? (
          <>
            <Stack.Screen name={ROUTES.SPLASH} component={SplashScreen} />
            <Stack.Screen name={ROUTES.ONBOARDING} component={OnboardingScreen} />
            <Stack.Screen name={ROUTES.LOGIN} component={LoginScreen} />
            <Stack.Screen name={ROUTES.REGISTER} component={RegisterScreen} />
            <Stack.Screen name={ROUTES.FORGOT_PASSWORD} component={ForgotPasswordScreen} />
            <Stack.Screen name={ROUTES.RESET_PASSWORD} component={ResetPasswordScreen} />
            <Stack.Screen name={ROUTES.CONFIRM_EMAIL} component={ConfirmEmailScreen} />
          </>
        ) : user?.role === 'admin' ? (
          <Stack.Screen name={ROUTES.ADMIN_STACK} component={AdminStack} />
        ) : (
          <Stack.Screen name={ROUTES.AGENT_TABS} component={AgentTabs} />
        )}
      </Stack.Navigator>
    </NavigationContainer>
  );
};

export default AppNavigator;