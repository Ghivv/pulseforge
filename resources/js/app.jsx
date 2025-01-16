import "./bootstrap";
import React from "react";
import { createRoot } from "react-dom/client";
import Dashboard from "./components/Dashboard";

// Wait for DOM to load
document.addEventListener("DOMContentLoaded", () => {
    // Check if dashboard element exists
    const dashboard = document.getElementById("dashboard-app");
    if (dashboard) {
        const root = createRoot(dashboard);
        root.render(
            <React.StrictMode>
                <Dashboard />
            </React.StrictMode>
        );
    }
});
