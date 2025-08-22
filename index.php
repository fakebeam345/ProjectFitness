<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบแนะนำการออกกำลังกาย</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Kanit', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .section-hidden {
            display: none;
        }
        
        .section-active {
            display: block;
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .nav-active {
            background-color: #4f46e5;
            color: white;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-blue-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold text-xl">F</span>
                    </div>
                    <span class="text-2xl font-bold text-gray-800">FitLife</span>
                </div>
                
                <div class="hidden md:flex space-x-6">
                    <button onclick="showSection('home')" class="nav-btn nav-active px-4 py-2 rounded-lg transition-colors">หน้าแรก</button>
                    <button onclick="showSection('tips')" class="nav-btn px-4 py-2 rounded-lg transition-colors hover:bg-gray-100">เทคนิคออกกำลังกาย</button>
                    <button onclick="showSection('workout')" class="nav-btn px-4 py-2 rounded-lg transition-colors hover:bg-gray-100">ตารางออกกำลังกาย</button>
                    <button onclick="showSection('nutrition')" class="nav-btn px-4 py-2 rounded-lg transition-colors hover:bg-gray-100">โภชนาการ</button>
                    <button onclick="showSection('calculator')" class="nav-btn px-4 py-2 rounded-lg transition-colors hover:bg-gray-100">เครื่องมือคำนวณ</button>
                    <button onclick="showSection('gallery')" class="nav-btn px-4 py-2 rounded-lg transition-colors hover:bg-gray-100">แกลลอรี</button>
                    <button onclick="showSection('contact')" class="nav-btn px-4 py-2 rounded-lg transition-colors hover:bg-gray-100">โปรไฟล์</button>
                </div>
                
                <div class="md:hidden">
                    <button onclick="toggleMobileMenu()" class="text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobileMenu" class="md:hidden hidden pb-4">
                <button onclick="showSection('home')" class="block w-full text-left px-4 py-2 hover:bg-gray-100">หน้าแรก</button>
                <button onclick="showSection('tips')" class="block w-full text-left px-4 py-2 hover:bg-gray-100">เทคนิคออกกำลังกาย</button>
                <button onclick="showSection('workout')" class="block w-full text-left px-4 py-2 hover:bg-gray-100">ตารางออกกำลังกาย</button>
                <button onclick="showSection('nutrition')" class="block w-full text-left px-4 py-2 hover:bg-gray-100">โภชนาการ</button>
                <button onclick="showSection('calculator')" class="block w-full text-left px-4 py-2 hover:bg-gray-100">เครื่องมือคำนวณ</button>
                <button onclick="showSection('gallery')" class="block w-full text-left px-4 py-2 hover:bg-gray-100">แกลลอรี</button>
                <button onclick="showSection('contact')" class="block w-full text-left px-4 py-2 hover:bg-gray-100">โปรไฟล์</button>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="section-active">
        <!-- Hero Section -->
        <div class="gradient-bg text-white py-20">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">ออกกำลังกายเพื่อสุขภาพ</h1>
                <p class="text-xl md:text-2xl mb-8 opacity-90">ค้นพบเทคนิคการออกกำลังกาย โภชนาการ และเครื่องมือที่จะช่วยให้คุณมีสุขภาพดี</p>
                
                <!-- Fitness Icon -->
                <div class="mb-8">
                    <svg class="w-32 h-32 mx-auto text-white opacity-80" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.57 14.86L22 13.43 20.57 12 17 15.57 8.43 7 12 3.43 10.57 2 9.14 3.43 7.71 2 5.57 4.14 4.14 2.71 2.71 4.14l1.43 1.43L2 7.71l1.43 1.43L2 10.57 3.43 12 7 8.43 15.57 17 12 20.57 13.43 22l1.43-1.43L16.29 22l2.14-2.14 1.43 1.43 1.43-1.43-1.43-1.43L22 16.29l-1.43-1.43z"/>
                    </svg>
                </div>
                
                <div class="flex flex-col md:flex-row gap-4 justify-center">
                    <button onclick="showSection('workout')" class="bg-white text-purple-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors">
                        ดูตารางออกกำลังกาย
                    </button>
                    <button onclick="showSection('calculator')" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition-colors">
                        คำนวณ BMI
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Features -->
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">สิ่งที่คุณจะได้รับ</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center card-hover bg-gray-50 p-8 rounded-xl">
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">💪</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">เทคนิคการออกกำลังกาย</h3>
                        <p class="text-gray-600">เรียนรู้เทคนิคที่ถูกต้องสำหรับการเล่นกล้าม คาร์ดิโอ </p>
                    </div>
                    
                    <div class="text-center card-hover bg-gray-50 p-8 rounded-xl">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">🥗</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">คำแนะนำโภชนาการ</h3>
                        <p class="text-gray-600">แนวทางการกินที่ถูกต้องเพื่อสุขภาพและการออกกำลังกายที่มีประสิทธิภาพ</p>
                    </div>
                    
                    <div class="text-center card-hover bg-gray-50 p-8 rounded-xl">
                        <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">📊</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">เครื่องมือคำนวณ</h3>
                        <p class="text-gray-600">คำนวณ BMI, BMR และแคลอรี่ที่ต้องการต่อวัน</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Exercise Tips Section -->
    <section id="tips" class="section-hidden py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">เทคนิคการออกกำลังกาย</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefits Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">❤️</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">ประโยชน์ของการออกกำลังกาย</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li>• เสริมสร้างระบบหัวใจและหลอดเลือด</li>
                        <li>• เพิ่มความแข็งแรงของกล้ามเนื้อ</li>
                        <li>• ลดความเสี่ยงโรคเรื้อรัง</li>
                        <li>• ช่วยควบคุมน้ำหนัก</li>
                        <li>• เพิ่มความมั่นใจในตนเอง</li>
                    </ul>
                </div>
                
                <!-- Warm-up Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">🔥</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">การอุ่นเครื่อง (Warm-up)</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li>• เดินหรือวิ่งเบา ๆ 5-10 นาที</li>
                        <li>• ยืดเหยียดกล้ามเนื้อเบา ๆ</li>
                        <li>• หมุนข้อต่อต่าง ๆ</li>
                        <li>• เพิ่มอัตราการเต้นของหัวใจค่อย ๆ</li>
                        <li>• เตรียมร่างกายก่อนออกแรง</li>
                    </ul>
                </div>
                
                <!-- Cool-down Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">❄️</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">การคลายเครียด (Cool-down)</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li>• เดินเบา ๆ 5-10 นาที</li>
                        <li>• ยืดกล้ามเนื้อที่ใช้งาน</li>
                        <li>• หายใจลึก ๆ เพื่อผ่อนคลาย</li>
                        <li>• ลดอัตราการเต้นของหัวใจ</li>
                        <li>• ป้องกันการบาดเจ็บ</li>
                    </ul>
                </div>
                
                <!-- Weight Training Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">🏋️</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">เวทเทรนนิ่ง</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li>• เริ่มต้นด้วยน้ำหนักเบา</li>
                        <li>• โฟกัสที่ท่าทางที่ถูกต้อง</li>
                        <li>• ทำ 8-12 ครั้งต่อเซ็ต</li>
                        <li>• พักระหว่างเซ็ต 1-2 นาที</li>
                        <li>• เพิ่มน้ำหนักค่อย ๆ</li>
                    </ul>
                </div>
                
                <!-- Cardio Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">🏃</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">คาร์ดิโอ</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li>• วิ่ง, ปั่นจักรยาน, ว่ายน้ำ</li>
                        <li>• ออกกำลังกาย 150 นาที/สัปดาห์</li>
                        <li>• รักษาอัตราการเต้นของหัวใจ</li>
                        <li>• เพิ่มความทนทานของหัวใจ</li>
                        <li>• เผาผลาญแคลอรี่</li>
                    </ul>
                </div>
                
                <!-- Yoga Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">🧘</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">โยคะ</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li>• เพิ่มความยืดหยุ่น</li>
                        <li>• เสริมสร้างความสมดุล</li>
                        <li>• ลดความเครียด</li>
                        <li>• เสริมสร้างกล้ามเนื้อแกนกลาง</li>
                        <li>• ปรับปรุงท่าทาง</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Workout Plan Section -->
    <section id="workout" class="section-hidden py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">ตารางออกกำลังกายรายสัปดาห์</h2>
            
            <div class="grid gap-6">
                <!-- Monday -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">จ</div>
                        <h3 class="text-2xl font-semibold text-gray-800">วันจันทร์ - Upper Body</h3>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-lg mb-2 text-blue-600">การออกกำลังกาย</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• วิ่งอุ่นเครื่อง 10 นาที</li>
                                <li>• วิดพื้น 3 เซ็ต x 10-15 ครั้ง</li>
                                <li>• ดันบาร์เบล 3 เซ็ต x 8-12 ครั้ง</li>
                                <li>• ดึงข้อ 3 เซ็ต x 5-10 ครั้ง</li>
                                <li>• ยืดเหยียด 10 นาที</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2 text-green-600">เป้าหมาย</h4>
                            <p class="text-gray-600">เสริมสร้างกล้ามเนื้อแขน หน้าอก และหลัง</p>
                        </div>
                    </div>
                </div>
                
                <!-- Tuesday -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-4">อ</div>
                        <h3 class="text-2xl font-semibold text-gray-800">วันอังคาร - Cardio & Core</h3>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-lg mb-2 text-blue-600">การออกกำลังกาย</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• วิ่งหรือปั่นจักรยาน 30 นาที</li>
                                <li>• แพลงค์ 3 เซ็ต x 30-60 วินาที</li>
                                <li>• ซิทอัพ 3 เซ็ต x 15-20 ครั้ง</li>
                                <li>• ไบเซเคิล ครันช์ 3 เซ็ต x 20 ครั้ง</li>
                                <li>• ยืดเหยียด 10 นาที</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2 text-green-600">เป้าหมาย</h4>
                            <p class="text-gray-600">เผาผลาญไขมันและเสริมสร้างกล้ามเนื้อหน้าท้อง</p>
                        </div>
                    </div>
                </div>
                
                <!-- Wednesday -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">พ</div>
                        <h3 class="text-2xl font-semibold text-gray-800">วันพุธ - Lower Body</h3>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-lg mb-2 text-blue-600">การออกกำลังกาย</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• อุ่นเครื่องด้วยการเดิน 10 นาที</li>
                                <li>• สควอท 3 เซ็ต x 12-15 ครั้ง</li>
                                <li>• ลันจ์ 3 เซ็ต x 10 ครั้ง/ข้าง</li>
                                <li>• เดดลิฟท์ 3 เซ็ต x 8-10 ครั้ง</li>
                                <li>• ยืดกล้ามเนื้อขา 15 นาที</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2 text-green-600">เป้าหมาย</h4>
                            <p class="text-gray-600">เสริมสร้างกล้ามเนื้อขาและสะโพก</p>
                        </div>
                    </div>
                </div>
                
                <!-- Thursday -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold mr-4">พฤ</div>
                        <h3 class="text-2xl font-semibold text-gray-800">วันพฤหัสบดี - Yoga & Flexibility</h3>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-lg mb-2 text-blue-600">การออกกำลังกาย</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• โยคะ 45 นาที</li>
                                <li>• ท่า Sun Salutation</li>
                                <li>• ท่า Warrior Pose</li>
                                <li>• ท่า Child's Pose</li>
                                <li>• สมาธิ 10 นาที</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2 text-green-600">เป้าหมาย</h4>
                            <p class="text-gray-600">เพิ่มความยืดหยุ่นและลดความเครียด</p>
                        </div>
                    </div>
                </div>
                
                <!-- Friday -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center text-white font-bold mr-4">ศ</div>
                        <h3 class="text-2xl font-semibold text-gray-800">วันศุกร์ - Full Body Circuit</h3>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-lg mb-2 text-blue-600">การออกกำลังกาย</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• เซอร์กิต 4 รอบ</li>
                                <li>• เบอร์ปี้ 10 ครั้ง</li>
                                <li>• จัมปิ้งแจ็ค 20 ครั้ง</li>
                                <li>• เมาน์เทนไคลม์เบอร์ 15 ครั้ง</li>
                                <li>• พัก 1 นาทีระหว่างรอบ</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2 text-green-600">เป้าหมาย</h4>
                            <p class="text-gray-600">เผาผลาญแคลอรี่และเสริมสร้างความทนทาน</p>
                        </div>
                    </div>
                </div>
                
                <!-- Weekend -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-indigo-500 rounded-full flex items-center justify-center text-white font-bold mr-4">ส-อ</div>
                        <h3 class="text-2xl font-semibold text-gray-800">วันเสาร์-อาทิตย์ - Active Recovery</h3>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-lg mb-2 text-blue-600">กิจกรรม</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• เดินเล่นในสวน 30-60 นาที</li>
                                <li>• ว่ายน้ำเบา ๆ</li>
                                <li>• เล่นกีฬาสันทนาการ</li>
                                <li>• ยืดเหยียดเบา ๆ</li>
                                <li>• พักผ่อนให้เพียงพอ</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2 text-green-600">เป้าหมาย</h4>
                            <p class="text-gray-600">ฟื้นฟูร่างกายและเตรียมพร้อมสำหรับสัปดาห์ใหม่</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nutrition Section -->
    <section id="nutrition" class="section-hidden py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">คำแนะนำโภชนาการ</h2>
            
            <!-- Nutrition Guidelines -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">🥬</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">อาหารก่อนออกกำลังกาย</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li>• กล้วย + อัลมอนด์</li>
                        <li>• ขนมปังโฮลเกรน + น้ำผึ้ง</li>
                        <li>• โอ๊ตมีล + ผลไม้</li>
                        <li>• กิน 1-2 ชั่วโมงก่อนออกกำลังกาย</li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">🥤</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">อาหารหลังออกกำลังกาย</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li>• โปรตีนเชค + กล้วย</li>
                        <li>• ไก่ย่าง + ข้าวกล้อง</li>
                        <li>• ไข่ + ขนมปังโฮลเกรน</li>
                        <li>• กินภายใน 30 นาทีหลังออกกำลังกาย</li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">💧</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">การดื่มน้ำ</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li>• ดื่มน้ำ 8-10 แก้วต่อวัน</li>
                        <li>• ดื่มน้ำก่อนออกกำลังกาย 2 แก้ว</li>
                        <li>• ดื่มน้ำระหว่างออกกำลังกาย</li>
                        <li>• ดื่มน้ำหลังออกกำลังกาย 2-3 แก้ว</li>
                    </ul>
                </div>
            </div>
            
            <!-- Calorie Calculator -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-2xl font-semibold mb-6 text-center">ตารางแคลอรี่ในอาหาร</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b-2 border-gray-200">
                                <th class="py-3 px-4 font-semibold">อาหาร</th>
                                <th class="py-3 px-4 font-semibold">ปริมาณ</th>
                                <th class="py-3 px-4 font-semibold">แคลอรี่</th>
                                <th class="py-3 px-4 font-semibold">โปรตีน (g)</th>
                                <th class="py-3 px-4 font-semibold">คาร์บ (g)</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4">ข้าวสวย</td>
                                <td class="py-3 px-4">1 ถ้วย</td>
                                <td class="py-3 px-4">205</td>
                                <td class="py-3 px-4">4.3</td>
                                <td class="py-3 px-4">45</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4">ไก่ย่าง</td>
                                <td class="py-3 px-4">100g</td>
                                <td class="py-3 px-4">165</td>
                                <td class="py-3 px-4">31</td>
                                <td class="py-3 px-4">0</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4">ไข่ไก่</td>
                                <td class="py-3 px-4">1 ฟอง</td>
                                <td class="py-3 px-4">70</td>
                                <td class="py-3 px-4">6</td>
                                <td class="py-3 px-4">0.6</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4">กล้วย</td>
                                <td class="py-3 px-4">1 ผล</td>
                                <td class="py-3 px-4">105</td>
                                <td class="py-3 px-4">1.3</td>
                                <td class="py-3 px-4">27</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4">อัลมอนด์</td>
                                <td class="py-3 px-4">28g</td>
                                <td class="py-3 px-4">164</td>
                                <td class="py-3 px-4">6</td>
                                <td class="py-3 px-4">6</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Healthy Menu Suggestions -->
            <div class="mt-12">
                <h3 class="text-2xl font-semibold mb-6 text-center">เมนูสุขภาพแนะนำ</h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6">
                        <h4 class="text-lg font-semibold mb-4 text-green-800">มื้อเช้า</h4>
                        <ul class="text-green-700 space-y-2">
                            <li>• โอ๊ตมีล + ผลไม้ + นม</li>
                            <li>• ไข่ต้ม 2 ฟอง + ขนมปังโฮลเกรน</li>
                            <li>• สมูทตี้ผลไม้ + โปรตีน</li>
                        </ul>
                    </div>
                    
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6">
                        <h4 class="text-lg font-semibold mb-4 text-blue-800">มื้อกลางวัน</h4>
                        <ul class="text-blue-700 space-y-2">
                            <li>• ข้าวกล้อง + ไก่ย่าง + ผัก</li>
                            <li>• สลัดไก่ + น้ำสลัดโยเกิร์ต</li>
                            <li>• ปลาย่าง + ข้าวโพด + ผักต้ม</li>
                        </ul>
                    </div>
                    
                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6">
                        <h4 class="text-lg font-semibold mb-4 text-purple-800">มื้อเย็น</h4>
                        <ul class="text-purple-700 space-y-2">
                            <li>• ซุปผัก + ขนมปังโฮลเกรน</li>
                            <li>• ปลาแซลมอน + ผักย่าง</li>
                            <li>• เต้าหู้ + ผัดผักรวม</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Calculator Section -->
    <section id="calculator" class="section-hidden py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">เครื่องมือคำนวณ</h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- BMI Calculator -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-semibold mb-6 text-center text-blue-600">คำนวณ BMI</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">น้ำหนัก (กิโลกรัม)</label>
                            <input type="number" id="weight" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="เช่น 70">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">ส่วนสูง (เซนติเมตร)</label>
                            <input type="number" id="height" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="เช่น 170">
                        </div>
                        <button onclick="calculateBMI()" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            คำนวณ BMI
                        </button>
                        <div id="bmiResult" class="mt-4 p-4 bg-gray-50 rounded-lg hidden">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-600" id="bmiValue"></div>
                                <div class="text-lg" id="bmiCategory"></div>
                                <div class="text-sm text-gray-600 mt-2" id="bmiAdvice"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- BMR Calculator -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-semibold mb-6 text-center text-green-600">คำนวณ BMR</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">เพศ</label>
                            <select id="gender" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option value="male">ชาย</option>
                                <option value="female">หญิง</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">อายุ (ปี)</label>
                            <input type="number" id="age" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="เช่น 25">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">น้ำหนัก (กิโลกรัม)</label>
                            <input type="number" id="weightBMR" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="เช่น 70">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">ส่วนสูง (เซนติเมตร)</label>
                            <input type="number" id="heightBMR" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="เช่น 170">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">ระดับกิจกรรม</label>
                            <select id="activity" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option value="1.2">นั่งทำงาน ไม่ออกกำลังกาย</option>
                                <option value="1.375">ออกกำลังกายเบา 1-3 วัน/สัปดาห์</option>
                                <option value="1.55">ออกกำลังกายปานกลาง 3-5 วัน/สัปดาห์</option>
                                <option value="1.725">ออกกำลังกายหนัก 6-7 วัน/สัปดาห์</option>
                                <option value="1.9">ออกกำลังกายหนักมาก หรือมีงานใช้แรง</option>
                            </select>
                        </div>
                        <button onclick="calculateBMR()" class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition-colors">
                            คำนวณ BMR
                        </button>
                        <div id="bmrResult" class="mt-4 p-4 bg-gray-50 rounded-lg hidden">
                            <div class="text-center">
                                <div class="text-lg font-semibold text-green-600">BMR: <span id="bmrValue"></span> แคลอรี่/วัน</div>
                                <div class="text-lg font-semibold text-blue-600 mt-2">TDEE: <span id="tdeeValue"></span> แคลอรี่/วัน</div>
                                <div class="text-sm text-gray-600 mt-2">
                                    <p>BMR = พลังงานที่ร่างกายใช้ในการดำรงชีวิต</p>
                                    <p>TDEE = พลังงานรวมที่ใช้ต่อวัน (รวมกิจกรรม)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="section-hidden py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">แกลลอรีและวิดีโอ</h2>
            
            <!-- Exercise Demonstrations -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold mb-6 text-center">ท่าออกกำลังกายพื้นฐาน</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Push-up Demo -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-4xl mb-2">💪</div>
                                <div class="font-semibold">วิดพื้น</div>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="font-semibold mb-2">Push-up</h4>
                            <p class="text-sm text-gray-600">เสริมสร้างกล้ามเนื้อหน้าอก แขน และไหล่</p>
                        </div>
                    </div>
                    
                    <!-- Squat Demo -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-4xl mb-2">🦵</div>
                                <div class="font-semibold">สควอท</div>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="font-semibold mb-2">Squat</h4>
                            <p class="text-sm text-gray-600">เสริมสร้างกล้ามเนื้อขาและสะโพก</p>
                        </div>
                    </div>
                    
                    <!-- Plank Demo -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-4xl mb-2">🏋️</div>
                                <div class="font-semibold">แพลงค์</div>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="font-semibold mb-2">Plank</h4>
                            <p class="text-sm text-gray-600">เสริมสร้างกล้ามเนื้อแกนกลาง</p>
                        </div>
                    </div>
                    
                    <!-- Burpee Demo -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-4xl mb-2">🔥</div>
                                <div class="font-semibold">เบอร์ปี้</div>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="font-semibold mb-2">Burpee</h4>
                            <p class="text-sm text-gray-600">ออกกำลังกายแบบเต็มตัว เผาผลาญสูง</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Video Recommendations -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-2xl font-semibold mb-6 text-center">วิดีโอแนะนำ</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="h-32 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-4xl">📹</span>
                        </div>
                        <h4 class="font-semibold mb-2">การอุ่นเครื่องสำหรับมือใหม่</h4>
                        <p class="text-sm text-gray-600 mb-3">เรียนรู้วิธีอุ่นเครื่องที่ถูกต้องก่อนออกกำลังกาย</p>
                        <button class="text-blue-600 text-sm font-semibold hover:underline">ดูวิดีโอ →</button>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="h-32 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-4xl">📹</span>
                        </div>
                        <h4 class="font-semibold mb-2">โยคะเบื้องต้น 15 นาที</h4>
                        <p class="text-sm text-gray-600 mb-3">ท่าโยคะง่าย ๆ สำหรับผู้เริ่มต้น</p>
                        <button class="text-blue-600 text-sm font-semibold hover:underline">ดูวิดีโอ →</button>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="h-32 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-4xl">📹</span>
                        </div>
                        <h4 class="font-semibold mb-2">HIIT ที่บ้าน 20 นาที</h4>
                        <p class="text-sm text-gray-600 mb-3">ออกกำลังกายแบบ High Intensity ที่บ้าน</p>
                        <button class="text-blue-600 text-sm font-semibold hover:underline">ดูวิดีโอ →</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-hidden py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">โปรไฟล์</h2>
            
             <div class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Header -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                    JD
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Profile Settings</h1>
                    <p class="text-gray-600">จัดการข้อมูลส่วนตัวและการตั้งค่าบัญชีของคุณ</p>
                </div>
            </div>
        </div>

        <!-- Main Form -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <form id="profileForm" class="space-y-6">
                <!-- Full Name Section -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">ข้อมูลส่วนตัว</h2>
                    <div>
                        <label for="fullname" class="block text-sm font-medium text-gray-700 mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="fullname" 
                            name="fullname" 
                            value="John Doe"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="กรอกชื่อ-นามสกุล"
                        >
                        <p class="text-xs text-gray-500 mt-1">ข้อมูลจาก: users.fullname</p>
                    </div>
                </div>

                <!-- Email Section -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">ข้อมูลการเข้าสู่ระบบ</h2>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address (Primary)
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="john.doe@company.com"
                            readonly
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-600 cursor-not-allowed"
                        >
                        <div class="flex items-center mt-2">
                            <svg class="w-4 h-4 text-amber-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-xs text-amber-600">อีเมลหลักไม่สามารถแก้ไขได้ (Primary Key สำหรับ Login)</span>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">ข้อมูลจาก: users.email</p>
                    </div>
                </div>

                <!-- Preferences Section -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">การตั้งค่าระบบ</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Timezone -->
                        <div>
                            <label for="timezone" class="block text-sm font-medium text-gray-700 mb-2">
                                Timezone
                            </label>
                            <select 
                                id="timezone" 
                                name="timezone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            >
                                <option value="Asia/Bangkok" selected>Bangkok (GMT+7)</option>
                                <option value="Asia/Tokyo">Tokyo (GMT+9)</option>
                                <option value="America/New_York">New York (GMT-5)</option>
                                <option value="Europe/London">London (GMT+0)</option>
                                <option value="Australia/Sydney">Sydney (GMT+10)</option>
                            </select>
                            <p class="text-xs text-gray-500 mt-1">ข้อมูลจาก: users.timezone</p>
                        </div>

                        <!-- Language -->
                        <div>
                            <label for="language" class="block text-sm font-medium text-gray-700 mb-2">
                                Language
                            </label>
                            <select 
                                id="language" 
                                name="language"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            >
                                <option value="th" selected>ไทย (Thai)</option>
                                <option value="en">English</option>
                                <option value="zh">中文 (Chinese)</option>
                                <option value="ja">日本語 (Japanese)</option>
                                <option value="ko">한국어 (Korean)</option>
                            </select>
                            <p class="text-xs text-gray-500 mt-1">ข้อมูลจาก: users.language</p>
                        </div>
                    </div>
                </div>

                <!-- Alternative Email Section -->
                <div class="pb-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Personal Account</h2>
                    <div>
                        <label for="alt_email" class="block text-sm font-medium text-gray-700 mb-2">
                            Add Alternative Email
                        </label>
                        <input 
                            type="email" 
                            id="alt_email" 
                            name="alt_email" 
                            value="john.personal@gmail.com"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="กรอกอีเมลส่วนตัว เช่น Gmail"
                        >
                        <p class="text-xs text-gray-600 mt-2">
                            💡 อีเมลสำรองสำหรับกรณีที่ไม่ได้ใช้อีเมลบริษัท/สถานศึกษา แต่ยังต้องการเข้าใช้ Coursera
                        </p>
                        <p class="text-xs text-gray-500 mt-1">ข้อมูลจาก: users.alt_email</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                    <button 
                        type="submit"
                        class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:from-blue-700 hover:to-indigo-700 transition-all duration-200 shadow-lg hover:shadow-xl"
                    >
                        💾 Save Changes
                    </button>
                    <button 
                        type="button"
                        onclick="resetForm()"
                        class="flex-1 bg-gray-100 text-gray-700 px-6 py-3 rounded-lg font-medium hover:bg-gray-200 transition-colors"
                    >
                        🔄 Reset
                    </button>
                </div>
            </form>
        </div>

        <!-- Database Operations Info -->
        <div class="mt-6 bg-blue-50 border border-blue-200 rounded-xl p-6">
            <h3 class="text-lg font-semibold text-blue-800 mb-3">🔍 Database Operations</h3>
            <div class="space-y-2 text-sm text-blue-700">
                <p><strong>เมื่อเปิดหน้า:</strong> SELECT * FROM users WHERE id = [user_id]</p>
                <p><strong>เมื่อกด Save:</strong> UPDATE users SET fullname=?, timezone=?, language=?, alt_email=? WHERE id=?</p>
                <p><strong>Email หลัก:</strong> ไม่สามารถแก้ไขได้เพราะเป็น Primary Key สำหรับ Authentication</p>
            </div>
        </div>

        <!-- Success Message (Hidden by default) -->
        <div id="successMessage" class="hidden mt-4 bg-green-50 border border-green-200 rounded-xl p-4">
            <div class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-green-800 font-medium">บันทึกข้อมูลเรียบร้อยแล้ว!</span>
            </div>
        </div>
    </div>

    <script>
        // Simulate database data loading on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Simulate SELECT query results
            const userData = {
                fullname: 'John Doe',
                email: 'john.doe@company.com',
                timezone: 'Asia/Bangkok',
                language: 'th',
                alt_email: 'john.personal@gmail.com'
            };
            
            // Populate form with database data
            document.getElementById('fullname').value = userData.fullname;
            document.getElementById('email').value = userData.email;
            document.getElementById('timezone').value = userData.timezone;
            document.getElementById('language').value = userData.language;
            document.getElementById('alt_email').value = userData.alt_email;
        });

        // Handle form submission
        document.getElementById('profileForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const updateData = {
                fullname: formData.get('fullname'),
                timezone: formData.get('timezone'),
                language: formData.get('language'),
                alt_email: formData.get('alt_email')
            };
            
            // Simulate UPDATE query
            console.log('Executing UPDATE query:', updateData);
            
            // Show success message
            const successMsg = document.getElementById('successMessage');
            successMsg.classList.remove('hidden');
            
            // Hide success message after 3 seconds
            setTimeout(() => {
                successMsg.classList.add('hidden');
            }, 3000);
            
            // Scroll to top to show success message
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Reset form function
        function resetForm() {
            if (confirm('คุณต้องการรีเซ็ตข้อมูลกลับเป็นค่าเดิมหรือไม่?')) {
                // Reload original data
                document.getElementById('fullname').value = 'John Doe';
                document.getElementById('timezone').value = 'Asia/Bangkok';
                document.getElementById('language').value = 'th';
                document.getElementById('alt_email').value = 'john.personal@gmail.com';
            }
        }

        // Real-time validation
        document.getElementById('fullname').addEventListener('input', function() {
            if (this.value.trim().length < 2) {
                this.classList.add('border-red-300');
            } else {
                this.classList.remove('border-red-300');
                this.classList.add('border-green-300');
            }
        });

        document.getElementById('alt_email').addEventListener('input', function() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (this.value && !emailRegex.test(this.value)) {
                this.classList.add('border-red-300');
            } else {
                this.classList.remove('border-red-300');
                if (this.value) this.classList.add('border-green-300');
            }
        });
    </script>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-blue-500 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold">F</span>
                        </div>
                        <span class="text-xl font-bold">FitLife</span>
                    </div>
                    <p class="text-gray-400">เว็บไซต์การออกกำลังกายและสุขภาพที่ครบครันสำหรับทุกคน</p>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">เมนูหลัก</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><button onclick="showSection('home')" class="hover:text-white transition-colors">หน้าแรก</button></li>
                        <li><button onclick="showSection('tips')" class="hover:text-white transition-colors">เทคนิคออกกำลังกาย</button></li>
                        <li><button onclick="showSection('workout')" class="hover:text-white transition-colors">ตารางออกกำลังกาย</button></li>
                        <li><button onclick="showSection('nutrition')" class="hover:text-white transition-colors">โภชนาการ</button></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">เครื่องมือ</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><button onclick="showSection('calculator')" class="hover:text-white transition-colors">คำนวณ BMI</button></li>
                        <li><button onclick="showSection('calculator')" class="hover:text-white transition-colors">คำนวณ BMR</button></li>
                        <li><button onclick="showSection('gallery')" class="hover:text-white transition-colors">แกลลอรี</button></li>
                        <li><button onclick="showSection('contact')" class="hover:text-white transition-colors">โปรไฟล์</button></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">ติดตามเรา</h4>
                    <div class="flex space-x-4">
                        <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center cursor-pointer hover:bg-blue-700 transition-colors">
                            <span class="text-sm">f</span>
                        </div>
                        <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center cursor-pointer hover:bg-green-600 transition-colors">
                            <span class="text-sm">L</span>
                        </div>
                        <div class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center cursor-pointer hover:bg-pink-600 transition-colors">
                            <span class="text-sm">IG</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 FitLife. สงวนลิขสิทธิ์ทุกประการ</p>
            </div>
        </div>
    </footer>

    <script>
        // Navigation functionality
        function showSection(sectionId) {
            // Hide all sections
            const sections = ['home', 'tips', 'workout', 'nutrition', 'calculator', 'gallery', 'contact'];
            sections.forEach(id => {
                const section = document.getElementById(id);
                if (section) {
                    section.classList.remove('section-active');
                    section.classList.add('section-hidden');
                }
            });
            
            // Show selected section
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                targetSection.classList.remove('section-hidden');
                targetSection.classList.add('section-active');
            }
            
            // Update navigation buttons
            const navButtons = document.querySelectorAll('.nav-btn');
            navButtons.forEach(btn => {
                btn.classList.remove('nav-active');
            });
            
            // Add active class to clicked button
            event.target.classList.add('nav-active');
            
            // Close mobile menu
            document.getElementById('mobileMenu').classList.add('hidden');
            
            // Scroll to top
            window.scrollTo(0, 0);
        }
        
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        }
        
        // BMI Calculator
        function calculateBMI() {
            const weight = parseFloat(document.getElementById('weight').value);
            const height = parseFloat(document.getElementById('height').value) / 100; // Convert cm to m
            
            if (!weight || !height || weight <= 0 || height <= 0) {
                alert('กรุณากรอกข้อมูลให้ครบถ้วนและถูกต้อง');
                return;
            }
            
            const bmi = weight / (height * height);
            const bmiValue = bmi.toFixed(1);
            
            let category, advice, color;
            
            if (bmi < 18.5) {
                category = 'น้ำหนักน้อย';
                advice = 'ควรเพิ่มน้ำหนักและสร้างกล้ามเนื้อ';
                color = 'text-blue-600';
            } else if (bmi < 25) {
                category = 'น้ำหนักปกติ';
                advice = 'น้ำหนักของคุณอยู่ในเกณฑ์ปกติ ควรรักษาไว้';
                color = 'text-green-600';
            } else if (bmi < 30) {
                category = 'น้ำหนักเกิน';
                advice = 'ควรลดน้ำหนักและออกกำลังกายเพิ่มขึ้น';
                color = 'text-yellow-600';
            } else {
                category = 'อ้วน';
                advice = 'ควรปรึกษาแพทย์และวางแผนลดน้ำหนัก';
                color = 'text-red-600';
            }
            
            document.getElementById('bmiValue').textContent = bmiValue;
            document.getElementById('bmiCategory').textContent = category;
            document.getElementById('bmiCategory').className = `text-lg font-semibold ${color}`;
            document.getElementById('bmiAdvice').textContent = advice;
            document.getElementById('bmiResult').classList.remove('hidden');
        }
        
        // BMR Calculator
        function calculateBMR() {
            const gender = document.getElementById('gender').value;
            const age = parseFloat(document.getElementById('age').value);
            const weight = parseFloat(document.getElementById('weightBMR').value);
            const height = parseFloat(document.getElementById('heightBMR').value);
            const activity = parseFloat(document.getElementById('activity').value);
            
            if (!age || !weight || !height || age <= 0 || weight <= 0 || height <= 0) {
                alert('กรุณากรอกข้อมูลให้ครบถ้วนและถูกต้อง');
                return;
            }
            
            let bmr;
            
            if (gender === 'male') {
                bmr = 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
            } else {
                bmr = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
            }
            
            const tdee = bmr * activity;
            
            document.getElementById('bmrValue').textContent = Math.round(bmr);
            document.getElementById('tdeeValue').textContent = Math.round(tdee);
            document.getElementById('bmrResult').classList.remove('hidden');
        }
        
        // Contact Form
        function submitContactForm(event) {
            event.preventDefault();
            
            const name = document.getElementById('contactName').value;
            const email = document.getElementById('contactEmail').value;
            const subject = document.getElementById('contactSubject').value;
            const message = document.getElementById('contactMessage').value;
            
            if (!name || !email || !message) {
                alert('กรุณากรอกข้อมูลให้ครบถ้วน');
                return;
            }
            
            // Simulate form submission
            document.getElementById('contactSuccess').classList.remove('hidden');
            
            // Reset form
            document.getElementById('contactName').value = '';
            document.getElementById('contactEmail').value = '';
            document.getElementById('contactMessage').value = '';
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                document.getElementById('contactSuccess').classList.add('hidden');
            }, 5000);
        }
        
        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            // Set first nav button as active
            const firstNavBtn = document.querySelector('.nav-btn');
            if (firstNavBtn) {
                firstNavBtn.classList.add('nav-active');
            }
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'97266da6c59a7dc8',t:'MTc1NTc0MDQ4OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
