<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติส่วนตัว - My Website</title>
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
                <a href="homework.php" class="font-semibold text-indigo-600 border-b-2 border-indigo-600 pb-1">ประวัติส่วนตัว</a>
                <a href="assign.php" class="font-semibold text-slate-500 hover:text-indigo-600 transition pb-1">รายการงาน</a>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main class="flex-grow max-w-6xl mx-auto w-full px-4 py-8">
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 grid md:grid-cols-3 gap-8">
            <!-- Profile Image & Contact -->
            <div class="text-center md:border-r border-slate-100 md:pr-8">
                <img src="https://via.placeholder.com/150" alt="Profile" class="w-36 h-36 rounded-full mx-auto mb-4 border-4 border-indigo-50 shadow">
                <h2 class="text-2xl font-bold">แกง หมู</h2>
               
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