import { useState } from "react";
import {
    Bell,
    Calendar,
    BarChart2,
    FileText,
    Settings,
    Users,
    LogOut,
} from "lucide-react";

const Dashboard = () => {
    const [activeMenu, setActiveMenu] = useState("Artikel Saya");

    const activities = [
        {
            title: "Artikel Terbaru",
            count: "3 Artikel",
            Icon: FileText,
            bgColor: "bg-blue-600",
        },
        {
            title: "Jadwal Hari Ini",
            count: "Latihan Dada",
            Icon: Calendar,
            bgColor: "bg-blue-500",
        },
        {
            title: "Progress",
            count: "+15%",
            Icon: BarChart2,
            bgColor: "bg-blue-400",
        },
    ];

    const menuItems = [
        { label: "Artikel Saya", Icon: FileText },
        { label: "Jadwal Latihan", Icon: Calendar },
        { label: "Statistik", Icon: BarChart2 },
        { label: "Forum", Icon: Users },
        { label: "Pengaturan Akun", Icon: Settings },
    ];

    return (
        <div className="min-h-screen bg-gray-50">
            {/* Header */}
            <header className="bg-white shadow">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex justify-between items-center py-4">
                        <div className="flex items-center space-x-4">
                            <img
                                src="/api/placeholder/40/40"
                                alt="Profile"
                                className="w-10 h-10 rounded-full"
                            />
                            <h2 className="text-xl font-bold text-gray-800">
                                Selamat Datang
                            </h2>
                        </div>
                        <div className="flex items-center space-x-4">
                            <button className="p-2 text-gray-500 hover:text-blue-600">
                                <Bell className="w-5 h-5" />
                            </button>
                            <button className="flex items-center space-x-2 text-blue-600 hover:text-blue-700">
                                <LogOut className="w-5 h-5" />
                                <span>Logout</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div className="flex flex-col md:flex-row gap-6">
                    {/* Sidebar */}
                    <aside className="w-full md:w-64 flex-shrink-0">
                        <nav className="bg-white shadow rounded-lg p-4">
                            <ul className="space-y-2">
                                {menuItems.map(({ label, Icon }) => (
                                    <li key={label}>
                                        <button
                                            onClick={() => setActiveMenu(label)}
                                            className={`w-full flex items-center space-x-3 px-4 py-2.5 rounded-lg transition-colors duration-200 ${
                                                activeMenu === label
                                                    ? "bg-blue-50 text-blue-600"
                                                    : "text-gray-700 hover:bg-gray-50 hover:text-blue-600"
                                            }`}
                                        >
                                            <Icon className="w-5 h-5" />
                                            <span>{label}</span>
                                        </button>
                                    </li>
                                ))}
                            </ul>
                        </nav>
                    </aside>

                    {/* Main Content */}
                    <main className="flex-1 space-y-6">
                        {/* Activity Cards */}
                        <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
                            {activities.map(
                                ({ title, count, Icon, bgColor }) => (
                                    <div
                                        key={title}
                                        className={`${bgColor} rounded-lg shadow p-6 text-white`}
                                    >
                                        <div className="flex items-center justify-between">
                                            <div>
                                                <h3 className="text-lg font-semibold">
                                                    {title}
                                                </h3>
                                                <p className="mt-1 text-white/90">
                                                    {count}
                                                </p>
                                            </div>
                                            <Icon className="w-6 h-6 text-white/80" />
                                        </div>
                                    </div>
                                )
                            )}
                        </div>

                        {/* Recent Articles */}
                        <div className="bg-white rounded-lg shadow p-6">
                            <h3 className="text-lg font-semibold text-gray-800 mb-4">
                                Artikel Terbaru
                            </h3>
                            <div className="space-y-4">
                                {[1, 2, 3].map((_, index) => (
                                    <div
                                        key={index}
                                        className="flex items-center space-x-4 p-4 hover:bg-gray-50 rounded-lg transition-colors duration-200"
                                    >
                                        <img
                                            src="/api/placeholder/64/64"
                                            alt="Article thumbnail"
                                            className="w-16 h-16 rounded-lg object-cover"
                                        />
                                        <div>
                                            <h4 className="font-semibold text-gray-800">
                                                Tips Latihan #{index + 1}
                                            </h4>
                                            <p className="text-sm text-gray-600 mt-1">
                                                Dipublikasikan 2 hari yang lalu
                                            </p>
                                        </div>
                                    </div>
                                ))}
                            </div>
                        </div>
                    </main>
                </div>
            </div>

            {/* Footer */}
            <footer className="bg-white border-t mt-8">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                    <p className="text-center text-gray-600 text-sm">
                        &copy; 2025 Fitness Dashboard. Hak Cipta Dilindungi.
                    </p>
                </div>
            </footer>
        </div>
    );
};

export default Dashboard;
