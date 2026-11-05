<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการงาน - My Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Sarabun', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">

    <!-- Header / Navbar -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="index.php" class="text-xl font-bold text-indigo-600">MyWebsite</a>
            <nav class="flex space-x-6">
                <a href="index.php" class="font-semibold text-slate-500 hover:text-indigo-600 transition pb-1">หน้าแรก</a>
                <a href="homework.php" class="font-semibold text-slate-500 hover:text-indigo-600 transition pb-1">ประวัติส่วนตัว</a>
                <a href="assign.php" class="font-semibold text-indigo-600 border-b-2 border-indigo-600 pb-1">รายการงาน</a>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main class="flex-grow max-w-6xl mx-auto w-full px-4 py-8 space-y-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">รายการงานที่ได้รับมอบหมาย</h2>
            <span class="bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1 rounded-full">ทั้งหมด 3 งาน</span>
        </div>

        <!-- Grid of Assignments -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Assignment Card 1 -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <span class="text-xs font-bold px-2.5 py-1 rounded bg-green-100 text-green-700">ส่งแล้ว</span>
                        <span class="text-xs text-slate-400">ส่งเมื่อ: 10 ต.ค. 2026</span>
                    </div>
                    <h3 class="text-lg font-bold mb-2">กุ้กกู้</h3>
                    <p class="text-slate-600 text-sm mb-4">ข้อมูลหลอก</p>
                </div>
                <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex justify-between items-center">
                    <span class="text-xs text-slate-500">คะแนน: 10/10</span>
                    
                </div>
            </div>

            <!-- Assignment Card 2 -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <span class="text-xs font-bold px-2.5 py-1 rounded bg-amber-100 text-amber-700">กำลังดำเนินการ</span>
                        <span class="text-xs text-slate-400">กำหนดส่ง: 15 พ.ย. 2026</span>
                    </div>
                    <h3 class="text-lg font-bold mb-2">แฮร่</h3>
                    <p class="text-slate-600 text-sm mb-4">หลอก</p>
                </div>
                <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex justify-between items-center">
                    <span class="text-xs text-slate-500">สถานะ: ในกระบวนการ</span>
                    
                </div>
            </div>

            <!-- Assignment Card 3 -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <span class="text-xs font-bold px-2.5 py-1 rounded bg-slate-100 text-slate-600">ยังไม่เริ่ม</span>
                        <span class="text-xs text-slate-400">กำหนดส่ง: 30 พ.ย. 2026</span>
                    </div>
                    <h3 class="text-lg font-bold mb-2">เทส</h3>
                    <p class="text-slate-600 text-sm mb-4">ปลอม</p>
                </div>
                <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex justify-between items-center">
                    <span class="text-xs text-slate-500">สถานะ: รอดำเนินการ</span>
                    
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 mt-auto">
        <div class="max-w-6xl mx-auto px-4 py-6 text-center text-sm text-slate-500">
            &copy; 2026 My Portfolio. Built with Tailwind CSS & PHP.
        </div>
    </footer>

</body>
</html>