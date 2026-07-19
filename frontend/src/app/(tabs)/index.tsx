import { Text, View, StyleSheet, Pressable } from "react-native";
import { useAuth } from '../../context/AuthContext';
import { logout } from '../../api/auth';
import { router } from 'expo-router';

export default function Index() {
  const { user, setUser } = useAuth();

  async function handleLogout() {
    await logout();
    setUser(null);
    router.replace('/login');
  }

  return (
    <View style={styles.container}>
      <Text>Edit src/app/index.tsx to edit this screen.</Text>
      {user && <Text>Logged in as: {user.email ?? user.name ?? 'User'}</Text>}
      <Pressable onPress={handleLogout} style={styles.button}>
        <Text style={styles.buttonText}>Log out</Text>
      </Pressable>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: "center",
    justifyContent: "center",
    gap: 12,
  },
  button: {
    paddingVertical: 8,
    paddingHorizontal: 16,
    backgroundColor: "#eee",
    borderRadius: 8,
  },
  buttonText: {
    fontWeight: "600",
  },
});