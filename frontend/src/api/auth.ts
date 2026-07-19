import api from './api';
import AsyncStorage from '@react-native-async-storage/async-storage';

export async function login(email: string, password: string) {
  const response = await api.post('/login', { email, password });
  await AsyncStorage.setItem('token', response.data.token);
  return response.data.user;
}

export async function register(name: string, email: string, password: string) {
  const response = await api.post('/register', { name, email, password });
  await AsyncStorage.setItem('token', response.data.token);
  return response.data.user;
}

export async function logout() {
  await api.post('/logout');
  await AsyncStorage.removeItem('token');
}

export async function getCurrentUser() {
  const response = await api.get('/user');
  return response.data;
}