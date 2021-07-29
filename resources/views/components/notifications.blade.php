<title>Volt Laravel Dashboard - Notifications</title>
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Volt</a></li>
            <li class="breadcrumb-item active" aria-current="page">Notifications</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Notifications</h1>
            <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.
            </p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-6">
        <div class="card border-0 shadow">
            <div class="card-header border-gray-100 d-flex justify-content-between align-items-center">
                <h2 class="h4 mb-0">Sweet alerts</h2>
                <a href="/documentation/plugins/sweet-alerts/index.html"
                    class="btn btn-outline-gray-500 d-inline-flex align-items-center" target="_blank">
                    <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Documentation
                </a>
            </div>
            <div class="card-body">
                <button class="btn btn-gray-800" id="basicAlert">Basic alert</button>
                <button class="btn btn-info" id="infoAlert">Info alert</button>
                <button class="btn btn-success" id="successAlert">Success alert</button>
                <button class="btn btn-danger" id="dangerAlert">Danger alert</button>
                <button class="btn btn-warning" id="warningAlert">Warning alert</button>
                <button class="btn btn-gray-200" id="questionAlert">Question</button>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="card border-0 shadow">
            <div class="card-header border-gray-100 d-flex justify-content-between align-items-center">
                <h2 class="h4 mb-0">Notyf</h2>
                <a href="/documentation/plugins/notifications/index.html"
                    class="btn btn-outline-gray-500 d-inline-flex align-items-center" target="_blank">
                    <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Documentation
                </a>
            </div>
            <div class="card-body">
                <button class="btn btn-info" id="notifyTopLeft">Top left info</button>
                <button class="btn btn-danger" id="notifyTopRight">Top right danger</button>
                <button class="btn btn-warning" id="notifyBottomLeft">Bottom left warning</button>
                <button class="btn btn-gray-800" id="notifyBottomRight">Primary bottom right</button>
            </div>
        </div>
    </div>
</div>

<script src="/assets/js/demo.js"></script>
