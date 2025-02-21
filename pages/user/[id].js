import { useEffect } from 'react';
import axios from 'axios';
import Spinner from '../../components/Spinner';
import UserDetails from '../../components/UserDetails';

export default function UserPage({ user }) {
  useEffect(() => {
    if (user?.id) {
      localStorage.setItem('lastVisitedUserId', user.id);
    }
  }, [user?.id]);

  if (!user) {
    return <Spinner />;
  }

  return (
    <div className="relative flex justify-center items-center min-h-screen bg-gradient-to-br from-[#f79d00] to-[#ffd194] overflow-hidden">
      <div className="absolute inset-0 z-[-1]">
        <div className="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.1),transparent)]"></div>
        <div className="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_80%_80%,rgba(255,255,255,0.1),transparent)]"></div>
      </div>

      {/* Основной контент */}
      <div className="p-6 max-w-[700px] w-full text-center">
        <h1 className="text-3xl font-bold text-white text-center mb-8 drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]">Детали пользователя</h1>

        {/* Контейнер с деталями пользователя */}
        <UserDetails user={user} />
      </div>
    </div>
  );
}

export async function getServerSideProps(context) {
  const { id } = context.params;

  try {
    const response = await axios.get(`https://jsonplaceholder.typicode.com/users/${id}`);
    const user = response.data;

    return {
      props: {
        user,
      },
    };
  } catch (error) {
    console.error('Ошибка при получении данных:', error);
    return {
      props: {
        user: null,
      },
    };
  }
}