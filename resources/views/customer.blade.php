<!DOCTYPE html>
<html lang="lo">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Errors Card</title>
    <!-- ໂຫຼດ Tailwind CSS ຜ່ານ CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ເພີ່ມ Fonts ພາສາລາວ (Phetsarath OT) ຖ້າຕ້ອງການ -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans Lao', sans-serif;
        }
    </style>
</head>

<body>
    <div class="max-w-md mx-auto bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 p-6">

        <!-- Header: Title & Add Customer Button -->
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-xl font-bold text-gray-900">Customer Info</h3>
                <p class="text-sm text-gray-500">Manage your client details</p>
            </div>

            <!-- Add Customer Button -->
            <a href="{{ route('add.customer') }}"
                class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-600 text-white text-sm font-semibold rounded-xl shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                </svg>
                <span>Add Customer</span>
            </a>
        </div>

        <hr class="border-gray-100 mb-6">
        @foreach ($customers as $customer)
        <!-- Customer Card Details -->
        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
            <div class="flex items-start gap-4">
                <!-- Avatar -->
                <img class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm"
                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&q=80"
                    alt="Customer Avatar">

                
                    <!-- Info -->
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <h4 class="text-base font-semibold text-gray-900 truncate">{{ $customer->name_lastname }}</h4>
                            <span
                                class="px-2.5 py-0.5 bg-emerald-100 text-emerald-800 text-xs font-medium rounded-full">Active</span>
                        </div>
                        <p class="text-sm text-gray-500 truncate">
                            ບ້ານ {{ $customer->village->vill_name }}, 
                            ເມືອງ {{ $customer->village->dristrict->dr_name }}, 
                            ແຂວງ {{ $customer->village->dristrict->province->pr_name }}
                        </p>
                        <p class="text-sm text-gray-500 mt-1">{{ $customer->street_address }}</p>
                    </div>
                
                <?php 
                    // print_r($customers);
                ?>

            </div>

            <!-- Action Buttons inside Card -->
            <div class="flex items-center gap-2 mt-4 pt-4 border-t border-gray-200">
                <button
                    class="flex-1 px-3 py-1.5 bg-white text-gray-700 text-xs font-semibold border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100 transition-colors">
                    Edit Profile
                </button>
                <button
                    class="flex-1 px-3 py-1.5 bg-red-50 text-red-600 text-xs font-semibold rounded-lg hover:bg-red-100 transition-colors">
                    Delete
                </button>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>