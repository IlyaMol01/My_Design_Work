import { useState, useEffect } from 'react';
import axios from 'axios';
import UserList from '../components/UserList';
import SearchBar from '../components/SearchBar';
import Spinner from '../components/Spinner';

export default function Home({ users }) {
  const [searchTerm, setSearchTerm] = useState('');
  const [loading, setLoading] = useState(true);
  const [lastVisitedUser, setLastVisitedUser] = useState(null);

  useEffect(() => {
    const lastVisitedUserId = localStorage.getItem('lastVisitedUserId');
    if (lastVisitedUserId) {
      const user = users.find((user) => user.id === Number(lastVisitedUserId));
      if (user) {
        setLastVisitedUser(user);
      }
    }

    setTimeout(() => {
      setLoading(false);
    }, 2500);
  }, [users]);

  if (loading) {
    return <Spinner />;
  }

  const filteredUsers = users.filter((user) =>
    user.name.toLowerCase().includes(searchTerm.toLowerCase())
  );

  return (
    <div className="relative flex justify-center items-center min-h-screen bg-gradient-to-br from-[#f79d00] to-[#ffd194] overflow-hidden">
      <div className="absolute inset-0 z-[-1]">
        <div className="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.1),transparent)]"></div>
        <div className="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_80%_80%,rgba(255,255,255,0.1),transparent)]"></div>
      </div>

      {/* Основной контент */}
      <div className="p-6 max-w-[1200px] w-full text-center">
        <h1 className="text-4xl font-bold text-white text-center mb-8 drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]">Список пользователей</h1>

        {/* Последний открытый пользователь */}
        {lastVisitedUser && (
          <div className="bg-gradient-to-br from-gray-100 to-blue-50 border border-gray-300 rounded-lg shadow-md p-4 mb-6">
            <h2 className="text-lg font-semibold text-gray-700 mb-2">Последний открытый пользователь:</h2>
            <div className="relative w-[190px] h-8 leading-8 border-2 border-blue-400 rounded-md bg-white shadow-inner cursor-pointer text-center overflow-hidden">
              <div className="absolute top-0 left-1/2 -translate-x-1/2 text-blue-500 font-bold text-sm whitespace-nowrap animate-slide-text">
                {lastVisitedUser.name}
              </div>
            </div>
          </div>
        )}

        {/* Поле поиска */}
        <SearchBar searchTerm={searchTerm} setSearchTerm={setSearchTerm} />

        {/* Список пользователей */}
        {filteredUsers.length > 0 ? (
          <UserList users={filteredUsers} />
        ) : (
          <p className="text-center text-gray-200 mt-4">Пользователи не найдены</p>
        )}
      </div>
    </div>
  );
}

export async function getServerSideProps() {
  try {
    const response = await axios.get('https://jsonplaceholder.typicode.com/users');
    const users = response.data;

    return {
      props: {
        users,
      },
    };
  } catch (error) {
    console.error('Ошибка при получении данных:', error);
    return {
      props: {
        users: [],
      },
    };
  }
}