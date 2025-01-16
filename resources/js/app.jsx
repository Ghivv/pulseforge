import './bootstrap';
import React from "react";
import { createRoot } from "react-dom/client";
import Dashboard from "./components/Dashboard";

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Pastikan ada element dengan id 'app' di blade template
const container = document.getElementById('app');
const root = createRoot(container);
root.render(
    <React.StrictMode>
        <Dashboard />
    </React.StrictMode>
);
