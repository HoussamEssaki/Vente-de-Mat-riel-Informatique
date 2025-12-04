<!DOCTYPE html>
<html class="light" lang="en">
<head>
    @include('components.head')
</head>
<body class="bg-background-light dark:bg-background-dark font-display">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <div class="flex flex-1 justify-center">
                <div class="layout-content-container flex flex-col max-w-[1280px] flex-1">
                    @include('components.header')
                    
                    <main>
                        @yield('content')
                    </main>
                    
                    @include('components.footer')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
