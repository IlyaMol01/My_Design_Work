export default function SearchBar({ searchTerm, setSearchTerm }) {
  return (
    <input
      type="text"
      placeholder="Поиск по имени..."
      value={searchTerm}
      onChange={(e) => setSearchTerm(e.target.value)}
      className="w-[93%] ml-[2%] h-10 px-4 text-base text-gray-600 border-2 border-gray-300 rounded-full bg-white shadow-sm focus:w-[95%] focus:h-12 focus:border-blue-500 focus:shadow-md transition-all duration-300 outline-none"/>
  );
}