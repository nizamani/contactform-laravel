<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Match Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class="bg-gray-100 flex items-center justify-center p-8 md:p-12">
    <div class="max-w-7xl w-full bg-white shadow-lg rounded-lg flex flex-wrap md:flex-col lg:flex-row items-stretch overflow-hidden">
        <!-- Left Side: Form -->
        <div class="w-full lg:w-[45%] px-6 py-6 flex flex-col justify-start">
            <div class="text-lg font-bold mb-8">🔳 Remote Devs</div>
            <div class="px-6 md:px-20 py-10">
                <h1 class="text-xl font-bold mb-9">Get matched with the perfect freelancer for your design project</h1>
                <!--If form was filled by user successfully, display that here-->
                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded-md mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                <form class="flex flex-col gap-4" action="{{ route('freelancer.submit') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-normal mb-1">First Name</label>
                            <input type="text" name="first_name" placeholder="First name"
                            class="w-full p-2 h-10 border rounded-lg
                                {{ $errors->has('first_name') ? 'border-red-500' : 'border-gray-300' }}"
                            value="{{ old('first_name') }}" required>
                            @if ($errors->has('first_name'))
                                <span class="text-red-500 text-sm">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                        <div>
                            <label class="block text-sm font-normal mb-1">Last Name</label>
                            <input type="text" name="last_name" placeholder="Last name" class="w-full p-2 h-10 border rounded-lg
                                {{ $errors->has('last_name') ? 'border-red-500' : 'border-gray-300' }}"
                             value="{{ old('last_name') }}" required>
                            @if ($errors->has('first_name'))
                                <p class="text-red-500 text-sm">{{ $errors->first('last_name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-normal mb-1">Email</label>
                        <input type="email" name="email" placeholder="Your email address" class="w-full p-2 h-10 border rounded-lg
                            {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}"
                        value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <p class="text-red-500 text-sm">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div>
                        <label class="block text-sm font-normal mb-1">Phone Number</label>
                        <input type="text" name="phone" placeholder="+1 (555) 000-0000" class="w-full p-2 h-10 border border-gray-300 rounded-lg"
                        value="{{ old('phone') }}">
                    </div>
                    <div>
                        <label class="block text-sm font-normal mb-1">Comments</label>
                        <textarea name="comments" placeholder="Additional details..." class="w-full p-2 h-20 border border-gray-300 rounded-lg">{{ old('comments') }}</textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-normal mb-2">Services</label>
                        <div class="grid grid-cols-2 gap-4">
                            @php
                                $services = ['Website design', 'Content creation', 'UI/UX design', 'Strategy & research', 'App design', 'Other'];
                            @endphp
                            @foreach($services as $service)
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="checkbox" name="services[]" value="{{ $service }}"
                                    class="w-5 h-5 border border-gray-300 rounded-md bg-white"
                                    {{ in_array($service, old('services', [])) ? 'checked' : '' }}>
                                <span class="select-none text-sm">{{ $service }}</span>
                            </label>
                        @endforeach
                        </div>
                    </div>
                    <button class="w-full mt-4 bg-black text-white py-3 rounded-lg flex items-center justify-center gap-2">
                        <span>Get matched</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Right Side: Image -->
        <div class="hidden md:hidden lg:flex w-[55%] relative py-2 pl-6 pr-2">
            <div class="w-full h-64 md:h-auto rounded-lg bg-cover bg-center"
            style="background-image: url('{{ asset('images/image1.jpg') }}');">
                <div class="absolute bottom-10 left-6 md:left-16 text-white">
                    <h2 class="text-2xl md:text-3xl" style="font-family: 'Pacifico', cursive;">
                        Hire talented freelancers
                    </h2>
                    <h2 class="text-2xl md:text-3xl" style="font-family: 'Pacifico', cursive;">
                        We are a team of top-rated talent.
                    </h2>
                    <div class="mt-4 flex gap-4">
                        <div
                            class="bg-gray-200 bg-opacity-40 p-3 rounded-lg text-white text-sm flex items-center space-x-2">
                            <div>
                                <i class="material-icons text-4xl">map</i>
                            </div>
                            <div>
                                Access our global talent<br> with 100,000+ world-class developers.
                            </div>
                        </div>
                        <div
                            class="bg-gray-200 bg-opacity-40 p-3 rounded-lg text-white text-sm flex items-center space-x-2">
                            <div>
                                <i class="material-icons text-4xl">draw</i>
                            </div>
                            <div>
                                Explore projects and pick<br> the perfect developer for you.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
