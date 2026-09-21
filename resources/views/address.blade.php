<!DOCTYPE html>
<html lang="lo">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ແບບຟອມທີ່ຢູ່ - ແຂວງ/ເມືອງ/ບ້ານ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *{ font-family: 'Noto Sans Lao', sans-serif; }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-shadow {
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }
        select:focus {
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.3);
        }
        .select-wrapper {
            position: relative;
        }
        .select-wrapper::after {
            content: '▼';
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.7rem;
            color: #6b7280;
            pointer-events: none;
        }
    </style>
</head>
<body class="gradient-bg min-h-screen py-10 px-4">

    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-lg mb-4">
                <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">ແບບຟອມທີ່ຢູ່</h1>
            <p class="text-indigo-100">ກະລຸນາເລືອກ ແຂວງ, ເມືອງ ແລະ ບ້ານ ຂອງທ່ານ</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl card-shadow p-6 md:p-10">
            <form id="addressForm" class="space-y-6" action="{{ route('customer.store') }}" method="POST">
                @csrf
                <!-- User Name -->
                <div>
                    <label class="flex items-center text-sm font-semibold text-gray-700 mb-2">
                        <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        ຊື່ ແລະ ນາມສະກຸນ
                    </label>
                    <input type="text" placeholder="ຊື່ ແລະ ນາມສະກຸນ"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-700 placeholder-gray-400 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all" name="user_name">
                </div>
                <!-- Province -->
                <div>
                    <label class="flex items-center text-sm font-semibold text-gray-700 mb-2">
                        <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3"/>
                        </svg>
                        ແຂວງ / ນະຄອນຫຼວງ <span class="text-red-500 ml-1">*</span>
                    </label>
                    <div class="select-wrapper">
                        <select id="province" required
                            class="w-full px-4 py-3 pr-10 bg-gray-50 border border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all appearance-none cursor-pointer" name="province">
                            <option value="">-- ກະລຸນາເລືອກແຂວງ --</option>
                            @foreach($province as $item)
                                <option value="{{ $item->pr_id }}">{{ $item->pr_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- District -->
                <div>
                    <label class="flex items-center text-sm font-semibold text-gray-700 mb-2">
                        <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        ເມືອງ <span class="text-red-500 ml-1">*</span>
                    </label>
                    <div class="select-wrapper">
                        <select id="district" required
                            class="w-full px-4 py-3 pr-10 bg-gray-50 border border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all appearance-none cursor-pointer disabled:opacity-60 disabled:cursor-not-allowed" name="district">
                            <option value="">-- ກະລຸນາເລືອກເມືອງ --</option>
                        </select>
                    </div>
                </div>

                <!-- Village -->
                <div>
                    <label class="flex items-center text-sm font-semibold text-gray-700 mb-2">
                        <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        ບ້ານ <span class="text-red-500 ml-1">*</span>
                    </label>
                    <div class="select-wrapper">
                        <select id="village"
                            class="w-full px-4 py-3 pr-10 bg-gray-50 border border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all appearance-none cursor-pointer disabled:opacity-60" name="village">
                            <option value=''>-- ກະລຸນາເລືອກບ້ານ --</option>
                        </select>
                    </div>
                </div>

                <!-- Street Address -->
                <div>
                    <label class="flex items-center text-sm font-semibold text-gray-700 mb-2">
                        <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        ທີ່ຢູ່ລະອຽດ (ເລກເຮືອນ, ຖະໜົນ...)
                    </label>
                    <input type="text" placeholder="ເຊັ່ນ: ເລກເຮືອນ 123, ຖະໜົນລ້ານຊ້າງ"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-700 placeholder-gray-400 focus:outline-none focus:border-indigo-500 focus:bg-white transition-all" name="street_address">
                </div>

                <!-- Summary -->
                <div id="summary" class="hidden bg-gradient-to-r from-indigo-50 to-purple-50 border border-indigo-100 rounded-xl p-4">
                    <h3 class="font-semibold text-indigo-700 mb-2 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        ສະຫຼຸບທີ່ຢູ່:
                    </h3>
                    <p id="summaryText" class="text-gray-700 text-sm"></p>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 pt-4">
                    <button type="submit"
                        class="flex-1 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                        💾 ບັນທຶກຂໍ້ມູນ
                    </button>
                    <button type="reset" id="resetBtn"
                        class="flex-1 bg-white hover:bg-gray-50 text-gray-700 font-semibold py-3 px-6 rounded-xl border border-gray-200 transition-all duration-200">
                        🔄 ລ້າງຂໍ້ມູນ
                    </button>
                </div>
            </form>
        </div>

        <p class="text-center text-indigo-100 text-sm mt-6">© 2026 ແບບຟອມທີ່ຢູ່ ສປປ ລາວ</p>
    </div>
</body>
</html>

<script>
    $(document).ready(function(){
        //alert("hello wordl");
        //load data district
        $("#province").change(function(){
            let pr_id = $(this).val();
            //alert(pr_id);
            $.ajax({
                url:'/get-district',
                type:'GET',
                dataType:'text',
                data:{pr_id:pr_id},
                success:function(data){
                    $("#district").html(data);
                },
                error:function(xhr){
                    console.log(xhr.respone);
                    
                }
            });
        });
        //load data village
        $("#district").change(function(){
            // alert("test district change");
            let dr_id = $(this).val();
            console.log(dr_id);
            $.ajax({
                url:"/get-village",
                type:"GET",
                dataType:"text",
                data:{dr_id:dr_id},
                success:function(data){
                    $("#village").html(data);
                }
            });
        });
    });
</script>