<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        urbanist: ['Urbanist', 'sans-serif'],
                    },
                    colors: {
                        'pastel-blue': '#A2D2FF',
                        'pastel-purple': '#B8B8FF',
                        'pastel-pink': '#FFAFCC',
                        'pastel-green': '#BDE0FE',
                        'pastel-yellow': '#FFE5D4',
                        'pastel-gray': '#F0F0F0',
                    },
                }
            }
        }
    </script>
</head>
<body class="font-urbanist">
    <div class="min-h-screen">
        <!-- Navbar -->
        <nav class="p-4 border-b">
            <div class="max-w-6xl mx-auto flex justify-between items-center">
                <span class="text-2xl font-bold text-pastel-blue">MoneyTracker</span>
                <div class="space-x-4">
                    <a href="#" class="px-4 py-2">Sign Up</a>
                    <a href="#" class="bg-pastel-blue text-white px-6 py-2 rounded-lg">Sign In</a>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="max-w-6xl mx-auto px-4 py-16">
            <!-- Hero -->
            <div class="text-center mb-20">
                <h1 class="text-5xl font-bold mb-4">
                    TRACK YOUR MONEY<br>IN ONE PLACE!
                </h1>
                <p class="text-xl text-gray-600">Monthly Expense Tracker</p>
            </div>

            <!-- Features -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center">
                    <div class="bg-pastel-gray rounded-xl p-8 mb-4 aspect-square flex items-center justify-center">
                        <!-- Placeholder for Track Expenses image -->
                        <svg class="w-full h-full" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="40" y="40" width="120" height="120" rx="8" fill="#A2D2FF" fill-opacity="0.3"/>
                            <text x="100" y="110" text-anchor="middle" fill="#666" font-family="Arial" font-size="14">
                                Track Expenses Image
                            </text>
                            <!-- Replace src="path/to/your/image.jpg" when ready -->
                            <image x="40" y="40" width="120" height="120" href="" preserveAspectRatio="xMidYMid meet"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Track Your Expenses</h3>
                    <p class="text-gray-600">Lorem ipsum Lorem Impsum Lorem Ipsum</p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center">
                    <div class="bg-pastel-purple bg-opacity-20 rounded-xl p-8 mb-4 aspect-square flex items-center justify-center">
                        <!-- Placeholder for Monthly Summary image -->
                        <svg class="w-full h-full" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="40" y="40" width="120" height="120" rx="8" fill="#B8B8FF" fill-opacity="0.3"/>
                            <text x="100" y="110" text-anchor="middle" fill="#666" font-family="Arial" font-size="14">
                                Monthly Summary Image
                            </text>
                            <!-- Replace src="path/to/your/image.jpg" when ready -->
                            <image x="40" y="40" width="120" height="120" href="" preserveAspectRatio="xMidYMid meet"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Monthly Summary</h3>
                    <p class="text-gray-600">Lorem ipsum Lorem Impsum Lorem Ipsum</p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center">
                    <div class="bg-pastel-green bg-opacity-20 rounded-xl p-8 mb-4 aspect-square flex items-center justify-center">
                        <!-- Placeholder for Save Money image -->
                        <svg class="w-full h-full" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="40" y="40" width="120" height="120" rx="8" fill="#BDE0FE" fill-opacity="0.3"/>
                            <text x="100" y="110" text-anchor="middle" fill="#666" font-family="Arial" font-size="14">
                                Save Money Image
                            </text>
                            <image x="40" y="40" width="120" height="120" href="" preserveAspectRatio="xMidYMid meet"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Save More Money</h3>
                    <p class="text-gray-600">Lorem ipsum Lorem Impsum Lorem Ipsum</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
