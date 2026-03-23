<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | View Messages</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-100 p-10 font-sans">

    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-8 bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
            <h1 class="text-3xl font-bold text-slate-800 tracking-tight">Inbox Messages</h1>

            <div class="flex items-center gap-6">
                <a href="/" class="text-blue-600 hover:text-blue-800 transition font-medium flex items-center">
                    <i class="fas fa-arrow-left mr-2 text-sm"></i> Back to Portfolio
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-xl text-sm font-bold transition shadow-md flex items-center">
                        <i class="fas fa-sign-out-alt mr-2"></i> Log Out
                    </button>
                </form>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded-xl mb-6 shadow-lg animate-bounce">
                <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-slate-200">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-900 text-white">
                    <tr>
                        <th class="p-4 uppercase text-xs tracking-wider">Name</th>
                        <th class="p-4 uppercase text-xs tracking-wider">Email</th>
                        <th class="p-4 uppercase text-xs tracking-wider">Message</th>
                        <th class="p-4 uppercase text-xs tracking-wider">Date</th>
                        <th class="p-4 uppercase text-xs tracking-wider text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    @forelse($messages as $msg)
                        <tr class="hover:bg-slate-50 transition duration-200">
                            <td class="p-4 font-semibold text-slate-700">{{ $msg->name }}</td>
                            <td class="p-4 text-blue-600 underline text-sm">{{ $msg->email }}</td>
                            <td class="p-4 text-slate-600 italic text-sm">"{{ $msg->message }}"</td>
                            <td class="p-4 text-xs text-slate-400 whitespace-nowrap">
                                <i class="far fa-clock mr-1"></i> {{ $msg->created_at->format('M d, Y h:i A') }}
                            </td>
                            <td class="p-4 text-center">
                                <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-white hover:bg-red-500 border border-red-500 px-3 py-1.5 rounded-lg transition duration-300 text-xs font-bold">
                                        <i class="fas fa-trash-alt mr-1"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="p-24 text-center text-slate-400">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-inbox text-6xl mb-4 text-slate-200"></i>
                                    <p class="text-lg">No messages found yet.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
