<style>
    /* Custom styles for the Filament admin panel */
    :root {
        --primary-50: 248 245 255;
        --primary-100: 238 230 254;
        --primary-200: 212 198 253;
        --primary-300: 182 155 250;
        --primary-400: 156 109 247;
        --primary-500: 124 58 237;
        --primary-600: 109 40 217;
        --primary-700: 91 33 182;
        --primary-800: 76 29 149;
        --primary-900: 58 16 120;
        --primary-950: 46 16 101;
    }

    /* Enhanced card styling */
    .fi-card {
        transition: all 0.2s ease-in-out;
        border-radius: 12px !important;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05) !important;
    }

    .fi-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1) !important;
    }

    /* Enhanced button styling */
    .fi-btn {
        border-radius: 8px !important;
        font-weight: 500 !important;
        transition: all 0.2s ease !important;
    }

    .fi-btn-primary:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(124, 58, 237, 0.3) !important;
    }

    /* Table styling */
    .fi-ta-header-cell {
        font-weight: 600 !important;
    }

    /* Form controls */
    .fi-input, .fi-select, .fi-textarea, .fi-checkbox {
        transition: border 0.2s ease, box-shadow 0.2s ease;
    }

    .fi-input:focus, .fi-select:focus, .fi-textarea:focus {
        border-color: rgba(124, 58, 237, 0.5) !important;
        box-shadow: 0 0 0 2px rgba(124, 58, 237, 0.25) !important;
    }

    /* Navigation enhancements */
    .fi-sidebar-nav {
        padding-top: 1rem !important;
    }

    .fi-sidebar-item {
        margin-bottom: 0.25rem !important;
        border-radius: 8px !important;
    }
    
    /* Dashboard widgets */
    .fi-widget {
        height: 100%;
        transition: all 0.2s ease-in-out;
    }
    
    .fi-widget:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1) !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Add any custom JavaScript functionality here
        console.log('WebAbhiraja Admin - Custom JS loaded');
    });
</script>
