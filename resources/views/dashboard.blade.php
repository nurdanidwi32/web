<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Dashboard
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: "Inter", sans-serif;
        }
    </style>
</head>

<body class="bg-[#e9f0f1] min-h-screen flex justify-center items-center p-6">
    <div class="max-w-[1200px] w-full bg-[#f7fcfc] rounded-lg shadow-[0_0_40px_0_rgba(0,0,0,0.1)] flex overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-48 bg-gradient-to-b from-[#3a2f7a] to-[#2e2560] flex flex-col justify-between">
            <div>
                <div class="flex items-center gap-2 px-4 py-4 border-b border-[#3a2f7a]">
                    <div
                        class="w-7 h-7 rounded-sm bg-[#d9a02a] text-white font-semibold flex justify-center items-center text-sm">
                        M
                    </div>
                    <button class="text-white text-sm font-semibold flex items-center gap-1 hover:underline"
                        type="button">
                        Main office
                        <i class="fas fa-chevron-down text-xs">
                        </i>
                    </button>
                </div>
                <nav class="mt-6 flex flex-col gap-2 px-4 text-[#b1a9d6] text-sm font-medium">
                    <a class="flex items-center gap-3 py-2 px-3 rounded-md bg-[#4a3f9a] text-white" href="#">
                        <i class="fas fa-compass text-sm">
                        </i>
                        Dashboard
                    </a>
                    <a class="flex items-center gap-3 py-2 px-3 rounded-md hover:text-white transition-colors" href="#">
                        <i class="far fa-envelope">
                        </i>
                        Requests
                    </a>
                    <a class="flex items-center gap-3 py-2 px-3 rounded-md hover:text-white transition-colors" href="#">
                        <i class="fas fa-check-circle">
                        </i>
                        Tasks
                    </a>
                    <a class="flex items-center gap-3 py-2 px-3 rounded-md hover:text-white transition-colors" href="#">
                        <i class="far fa-user">
                        </i>
                        Team members
                    </a>
                    <a class="flex items-center gap-3 py-2 px-3 rounded-md hover:text-white transition-colors" href="#">
                        <i class="far fa-clock">
                        </i>
                        Archive
                    </a>
                </nav>
            </div>
            <div>
                <nav class="flex flex-col gap-2 px-4 text-[#b1a9d6] text-sm font-medium border-t border-[#3a2f7a] pt-4">
                    <a class="flex items-center gap-3 py-2 px-3 rounded-md hover:text-white transition-colors" href="#">
                        <i class="far fa-credit-card">
                        </i>
                        Accounts
                    </a>
                    <a class="flex items-center gap-3 py-2 px-3 rounded-md hover:text-white transition-colors" href="#">
                        <i class="fas fa-cog">
                        </i>
                        Settings
                    </a>
                </nav>
                <button
                    class="flex items-center gap-2 text-[#b1a9d6] text-sm font-normal px-4 py-3 w-full hover:text-white transition-colors"
                    type="button">
                    <i class="fas fa-chevron-left">
                    </i>
                    Hide panel
                </button>
                <div class="mx-4 mb-6 mt-4 bg-[#4a3f9a] rounded-lg p-4 relative text-center text-white text-xs font-semibold"
                    style="box-shadow: 0 0 20px 0 rgb(74 63 154 / 0.5)">
                    <button aria-label="Close Zapier Integration"
                        class="absolute top-1 right-2 text-white text-xs font-bold" type="button">
                        ×
                    </button>
                    <i class="fas fa-asterisk text-2xl mb-2">
                    </i>
                    <div>
                        Zapier Integration
                    </div>
                    <button
                        class="mt-3 bg-[#3ea6ff] hover:bg-[#2a8de0] transition-colors rounded-md px-4 py-1 text-white font-semibold"
                        type="button">
                        Connect
                    </button>
                </div>
            </div>
        </aside>
        <!-- Main content -->
        <main class="flex-1 p-6">
            <!-- Top bar -->
            <header class="flex items-center justify-between border-b border-[#e6e6e6] pb-3 mb-6">
                <form aria-label="Site Search"
                    class="flex items-center border border-[#d9d9d9] rounded-md px-3 py-1 w-full max-w-md"
                    role="search">
                    <i class="fas fa-search text-[#a3a3a3]">
                    </i>
                    <input class="ml-2 w-full text-sm text-[#a3a3a3] placeholder-[#a3a3a3] focus:outline-none"
                        placeholder="Search" type="search" />
                </form>
                <div class="flex items-center gap-4 ml-6 whitespace-nowrap">
                    <span class="text-xs text-[#a3a3a3] font-normal">
                        Theresa Roemer
                    </span>
                    <img alt="Profile picture of Theresa Roemer" class="w-8 h-8 rounded-full object-cover" height="32"
                        src="https://storage.googleapis.com/a1aa/image/65405cc0-52c8-47fc-5be9-c7ee6b0cef49.jpg"
                        width="32" />
                    <button aria-label="Notifications" class="relative text-[#a3a3a3] hover:text-[#555]" type="button">
                        <i class="far fa-bell text-lg">
                        </i>
                        <span class="absolute top-0 right-0 w-2.5 h-2.5 bg-[#d94a2a] rounded-full border border-white">
                        </span>
                    </button>
                </div>
            </header>
            <!-- Overview header -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-extrabold text-[#1a1a1a]">
                    Overview
                </h2>
                <button
                    class="text-xs font-normal bg-white border border-[#d9d9d9] rounded-md px-3 py-1 hover:bg-[#f0f0f0] transition-colors"
                    type="button">
                    Last 30 days
                    <i class="fas fa-chevron-down text-xs">
                    </i>
                </button>
            </div>
            <!-- Cards row -->
            <section aria-label="Overview statistics" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                <!-- Card 1 -->
                <article aria-label="Requests"
                    class="bg-white rounded-lg p-5 shadow-[0_0_20px_0_rgba(0,0,0,0.05)] relative">
                    <button aria-label="More options" class="absolute top-3 right-3 text-[#b1b1b1] hover:text-[#555]"
                        type="button">
                        <i class="fas fa-ellipsis-h">
                        </i>
                    </button>
                    <div class="w-10 h-10 rounded-full bg-[#d9f0fc] flex justify-center items-center mb-4">
                        <i class="far fa-envelope text-[#3a7fc1] text-lg">
                        </i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#1a1a1a] leading-none">
                        238
                    </h3>
                    <p class="text-xs text-[#a3a3a3] mb-2">
                        Requests
                    </p>
                    <p class="text-xs text-[#2f9e6a] font-semibold flex items-center gap-1">
                        <i class="fas fa-arrow-up text-xs">
                        </i>
                        4.7%
                    </p>
                </article>
                <!-- Card 2 -->
                <article aria-label="Spendings"
                    class="bg-white rounded-lg p-5 shadow-[0_0_20px_0_rgba(0,0,0,0.05)] relative">
                    <button aria-label="More options" class="absolute top-3 right-3 text-[#b1b1b1] hover:text-[#555]"
                        type="button">
                        <i class="fas fa-ellipsis-h">
                        </i>
                    </button>
                    <div class="w-10 h-10 rounded-full bg-[#fce6e9] flex justify-center items-center mb-4">
                        <i class="far fa-credit-card text-[#d96a6f] text-lg">
                        </i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#1a1a1a] leading-none">
                        $5.436
                    </h3>
                    <p class="text-xs text-[#a3a3a3] mb-2">
                        Spendings
                    </p>
                    <p class="text-xs text-[#2f9e6a] font-semibold flex items-center gap-1">
                        <i class="fas fa-arrow-up text-xs">
                        </i>
                        2.3%
                    </p>
                </article>
                <!-- Card 3 -->
                <article aria-label="Team members"
                    class="bg-white rounded-lg p-5 shadow-[0_0_20px_0_rgba(0,0,0,0.05)] relative">
                    <button aria-label="More options" class="absolute top-3 right-3 text-[#b1b1b1] hover:text-[#555]"
                        type="button">
                        <i class="fas fa-ellipsis-h">
                        </i>
                    </button>
                    <div class="w-10 h-10 rounded-full bg-[#d9f7f0] flex justify-center items-center mb-4">
                        <i class="fas fa-users text-[#3abf9a] text-lg">
                        </i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#1a1a1a] leading-none">
                        176
                    </h3>
                    <p class="text-xs text-[#a3a3a3] mb-2">
                        Team members
                    </p>
                    <p class="text-xs text-[#a3a3a3] font-semibold">
                        –
                    </p>
                </article>
                <!-- Card 4 -->
                <article aria-label="Tasks"
                    class="bg-white rounded-lg p-5 shadow-[0_0_20px_0_rgba(0,0,0,0.05)] relative">
                    <button aria-label="More options" class="absolute top-3 right-3 text-[#b1b1b1] hover:text-[#555]"
                        type="button">
                        <i class="fas fa-ellipsis-h">
                        </i>
                    </button>
                    <div class="w-10 h-10 rounded-full bg-[#e6e4fc] flex justify-center items-center mb-4">
                        <i class="fas fa-check-circle text-[#7a75d9] text-lg">
                        </i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#1a1a1a] leading-none">
                        112
                    </h3>
                    <p class="text-xs text-[#a3a3a3] mb-2">
                        Tasks
                    </p>
                    <p class="text-xs text-[#d94a2a] font-semibold flex items-center gap-1">
                        <i class="fas fa-arrow-down text-xs">
                        </i>
                        1.1%
                    </p>
                </article>
            </section>
            <!-- Bottom row -->
            <section aria-label="Additional statistics and improvement" class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Requests status -->
                <article aria-label="Requests status"
                    class="bg-white rounded-lg p-5 shadow-[0_0_20px_0_rgba(0,0,0,0.05)] relative">
                    <button aria-label="More options" class="absolute top-3 right-3 text-[#b1b1b1] hover:text-[#555]"
                        type="button">
                        <i class="fas fa-ellipsis-h">
                        </i>
                    </button>
                    <h3 class="text-sm font-semibold text-[#1a1a1a] mb-4">
                        Requests status
                    </h3>
                    <div class="flex flex-col items-center">
                        <img alt="Donut chart showing requests status with segments for Approved, Pending, Postponed, and Denied"
                            class="mb-4" height="160" loading="lazy"
                            src="https://storage.googleapis.com/a1aa/image/fbb4ac5e-349d-4742-34ac-399c9cf01363.jpg"
                            width="160" />
                        <div class="grid grid-cols-2 gap-2 w-full max-w-xs text-xs text-[#555]">
                            <div class="flex items-center gap-2">
                                <span aria-hidden="true" class="w-3 h-3 rounded-full bg-[#2e2560] inline-block">
                                </span>
                                Approved
                            </div>
                            <div class="flex items-center gap-2">
                                <span aria-hidden="true" class="w-3 h-3 rounded-full bg-[#5a4fcf] inline-block">
                                </span>
                                Pending
                            </div>
                            <div class="flex items-center gap-2">
                                <span aria-hidden="true" class="w-3 h-3 rounded-full bg-[#3a7fc1] inline-block">
                                </span>
                                Postponed
                            </div>
                            <div class="flex items-center gap-2">
                                <span aria-hidden="true" class="w-3 h-3 rounded-full bg-[#a3a9d6] inline-block">
                                </span>
                                Denied
                            </div>
                        </div>
                    </div>
                </article>
                <!-- Compare periods -->
                <article aria-label="Compare periods"
                    class="bg-white rounded-lg p-5 shadow-[0_0_20px_0_rgba(0,0,0,0.05)] relative">
                    <button aria-label="More options" class="absolute top-3 right-3 text-[#b1b1b1] hover:text-[#555]"
                        type="button">
                        <i class="fas fa-ellipsis-h">
                        </i>
                    </button>
                    <h3 class="text-sm font-semibold text-[#1a1a1a] mb-4">
                        Compare periods
                    </h3>
                    <img alt="Area chart comparing this month and last month with a data point showing $870.32"
                        class="mb-4" height="200" loading="lazy"
                        src="https://storage.googleapis.com/a1aa/image/6f41cfe1-f7ad-49fe-4d7d-1902fbe72cd6.jpg"
                        width="280" />
                    <div class="flex gap-4 text-xs text-[#555]">
                        <div class="flex items-center gap-2">
                            <span aria-hidden="true" class="w-3 h-3 rounded-full bg-[#2e2560] inline-block">
                            </span>
                            This month
                        </div>
                        <div class="flex items-center gap-2">
                            <span aria-hidden="true" class="w-3 h-3 rounded-full bg-[#f4c6d0] inline-block">
                            </span>
                            Last month
                        </div>
                    </div>
                </article>
                <!-- Improve management -->
                <article aria-label="Improve management"
                    class="bg-[#4a3f9a] rounded-lg p-6 flex flex-col justify-center items-center text-white relative">
                    <button aria-label="Help" class="absolute top-3 right-3 text-white opacity-50 hover:opacity-100"
                        type="button">
                        <i class="fas fa-question-circle">
                        </i>
                    </button>
                    <h3 class="text-lg font-extrabold text-center leading-tight mb-2">
                        Improve
                        <br />
                        management.
                    </h3>
                    <p class="text-xs text-[#b1a9d6] mb-6">
                        Mess – into structure
                    </p>
                    <button
                        class="bg-white text-[#4a3f9a] font-semibold rounded-md px-6 py-2 hover:bg-[#d9d9d9] transition-colors"
                        type="button">
                        Improve
                    </button>
                    <img alt="Abstract pattern of blue and purple blocks in various shades"
                        class="mt-6 w-full object-contain" height="120" loading="lazy"
                        src="https://storage.googleapis.com/a1aa/image/6811e895-7c4b-418d-1c20-52565aebd4c8.jpg"
                        width="280" />
                </article>
            </section>
        </main>
    </div>
</body>

</html>