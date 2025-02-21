import Link from 'next/link';

export default function UserList({ users }) {
  return (
    <div className="grid grid-cols-[repeat(auto-fit,minmax(250px,1fr))] gap-8 p-8 max-w-[1200px] mx-auto">
      {users.map((user) => (
        <div
          key={user.id}
          className="relative w-full h-[400px] bg-gradient-to-br from-white to-gray-100 rounded-lg shadow-md overflow-hidden transform hover:rotate-y-15 hover:scale-105 hover:border-gray-400 hover:shadow-lg transition-all duration-500">
          <div className="relative z-10 p-4 h-full flex flex-col justify-between">
            <div className="text-xl font-bold text-blue-600 uppercase tracking-wide text-center mb-4">
              {user.name}
            </div>
            <div className="w-full h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent"></div>
            <div className="text-gray-600 space-y-2 pl-4">
              <p>Email: {user.email}</p>
              <p>Город: {user.address.city}</p>
            </div>
            <div className="w-full h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent"></div>
            <Link href={`/user/${user.id}`}>
              <button className="block mx-auto mt-4 py-2 px-4 w-[calc(100%-2rem)] bg-blue-400 text-white rounded-full font-bold shadow-md hover:bg-blue-500 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 cursor-pointer">Подробнее</button>
            </Link>
          </div>
        </div>
      ))}
    </div>
  );
}