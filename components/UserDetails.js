import { useRouter } from 'next/router';

export default function UserDetails({ user }) {
  const router = useRouter();

  return (
    <div className="bg-gradient-to-br from-white to-gray-50 rounded-lg shadow-lg p-8 max-w-[700px] w-full mx-auto text-center relative transform hover:rotate-y-5 transition-transform duration-500">
      <div className="text-2xl font-bold text-gray-700 uppercase tracking-wider mb-4">
        {user.name}
      </div>
      <div className="space-y-4">
        <div className="bg-gradient-to-br from-white to-gray-100 border border-transparent rounded-lg shadow-sm p-4 skew-x-[-5deg] hover:skew-x-0 hover:scale-105 hover:border-pink-400 hover:shadow-lg transition-all duration-300">
          <p className="text-gray-600"><strong>Email:</strong> {user.email}</p>
        </div>
        <div className="bg-gradient-to-br from-white to-gray-100 border border-transparent rounded-lg shadow-sm p-4 skew-x-[5deg] self-end hover:skew-x-0 hover:scale-105 hover:border-pink-400 hover:shadow-lg transition-all duration-300">
          <p className="text-gray-600"><strong>Телефон:</strong> {user.phone}</p>
        </div>
        <div className="bg-gradient-to-br from-white to-gray-100 border border-transparent rounded-lg shadow-sm p-4 skew-x-[-5deg] hover:skew-x-0 hover:scale-105 hover:border-pink-400 hover:shadow-lg transition-all duration-300">
          <p className="text-gray-600"><strong>Адрес:</strong> {`${user.address.city}, ${user.address.street}`}</p>
        </div>
        <div className="bg-gradient-to-br from-white to-gray-100 border border-transparent rounded-lg shadow-sm p-4 skew-x-[5deg] self-end hover:skew-x-0 hover:scale-105 hover:border-pink-400 hover:shadow-lg transition-all duration-300">
          <p className="text-gray-600"><strong>Компания:</strong> {user.company.name}</p>
        </div>
      </div>
      <button
        className="mt-5 w-[80%] mx-auto py-3 px-8 bg-pink-400 text-white rounded-full font-bold shadow-md hover:bg-pink-500 hover:scale-105 hover:shadow-lg transition-all duration-300 relative overflow-hidden cursor-pointer"
        onClick={() => router.back()}>Вернуться<span className="absolute right-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">←</span>
      </button>
    </div>
  );
}