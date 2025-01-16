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

    // Gunakan route Laravel untuk logout
    const handleLogout = () => {
        const form = document.createElement("form");
        form.method = "POST";
        form.action = "/logout";

        const csrfToken = document.querySelector(
            'meta[name="csrf-token"]'
        ).content;
        const csrfInput = document.createElement("input");
        csrfInput.type = "hidden";
        csrfInput.name = "_token";
        csrfInput.value = csrfToken;

        form.appendChild(csrfInput);
        document.body.appendChild(form);
        form.submit();
    };

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
        { label: "Artikel Saya", Icon: FileText, route: "/articles" },
        { label: "Jadwal Latihan", Icon: Calendar, route: "/schedule" },
        { label: "Statistik", Icon: BarChart2, route: "/statistics" },
        { label: "Forum", Icon: Users, route: "/forum" },
        { label: "Pengaturan Akun", Icon: Settings, route: "/settings" },
    ];

    return (
        <div className="py-12">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div className="p-6">
                        <div className="flex flex-col md:flex-row gap-6">
                            {/* Sidebar */}
                            <aside className="w-full md:w-64 flex-shrink-0">
                                <nav className="bg-white dark:bg-gray-700 shadow rounded-lg p-4">
                                    <ul className="space-y-2">
                                        {menuItems.map(
                                            ({ label, Icon, route }) => (
                                                <li key={label}>
                                                    <a
                                                        href={route}
                                                        className={`w-full flex items-center space-x-3 px-4 py-2.5 rounded-lg transition-colors duration-200 ${
                                                            activeMenu === label
                                                                ? "bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-200"
                                                                : "text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                                                        }`}
                                                    >
                                                        <Icon className="w-5 h-5" />
                                                        <span>{label}</span>
                                                    </a>
                                                </li>
                                            )
                                        )}
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
                                <div className="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                                    <h3 className="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">
                                        Artikel Terbaru
                                    </h3>
                                    <div className="space-y-4">
                                        {[1, 2, 3].map((_, index) => (
                                            <div
                                                key={index}
                                                className="flex items-center space-x-4 p-4 hover:bg-gray-50 dark:hover:bg-gray-600 rounded-lg transition-colors duration-200"
                                            >
                                                <img
                                                    src="/api/placeholder/64/64"
                                                    alt="Article thumbnail"
                                                    className="w-16 h-16 rounded-lg object-cover"
                                                />
                                                <div>
                                                    <h4 className="font-semibold text-gray-800 dark:text-gray-200">
                                                        Tips Latihan #
                                                        {index + 1}
                                                    </h4>
                                                    <p className="text-sm text-gray-600 dark:text-gray-400 mt-1">
                                                        Dipublikasikan 2 hari
                                                        yang lalu
                                                    </p>
                                                </div>
                                            </div>
                                        ))}
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Dashboard;
