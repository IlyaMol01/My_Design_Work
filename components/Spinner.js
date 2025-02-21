export default function Spinner() {
  return (
    <div className="flex justify-center items-center min-h-screen bg-gradient-to-br from-orange-start via-orange-middle to-orange-end relative overflow-hidden">
      <div className="absolute inset-0 bg-gradient-radial opacity-50 pointer-events-none"></div>
      <div className="spinner flex gap-1 animate-spin-slow">
        {Array.from({ length: 5 }).map((_, index) => (
          <div
            key={index}
            className="w-1.5 h-8 bg-pink-400 rounded-sm animate-grow"></div>
        ))}
      </div>
    </div>
  );
}