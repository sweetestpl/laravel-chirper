<x-layout>
    <x-slot:title>
        Home Feed
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Latest Chirps</h1>

        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <form method="POST" action="/chirps">
                    @csrf

                    <div class="form-control w-full">
                        <textarea
                            name="message"
                            placeholder="What's on your mind?"
                            class="textarea textarea-bordered w-full resize-none @error('message') textarea-error @enderror"
                            rows="4"
                            maxlength="255"
                            required
                        >{{ old('message') }}</textarea>

                        @error('message')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                        @guest
                            <p class="text-sm text-base-content/60">
                                Please register or sign in to post a chirp.
                            </p>
                        @endguest

                        <button type="submit" class="btn btn-primary btn-sm">
                            Chirp
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="space-y-4 mt-8">
            @forelse ($chirps as $chirp)
                <div class="card bg-base-100 shadow">
                    <div class="card-body">
                        <div class="flex justify-between w-full">
                            <div>
                                <div class="flex items-center gap-1">
                                    <span class="text-sm font-semibold">
                                        {{ $chirp->user ? $chirp->user->name : 'Anonymous' }}
                                    </span>

                                    <span class="text-base-content/60">·</span>

                                    <span class="text-sm text-base-content/60">
                                        {{ $chirp->created_at->diffForHumans() }}
                                    </span>

                                    @if ($chirp->updated_at->gt($chirp->created_at->copy()->addSeconds(5)))
                                        <span class="text-base-content/60">·</span>
                                        <span class="text-sm text-base-content/60 italic">edited</span>
                                    @endif
                                </div>

                                <p class="mt-1">
                                    {{ $chirp->message }}
                                </p>
                            </div>

                            @can('update', $chirp)
                                <div class="flex gap-1">
                                    <a href="/chirps/{{ $chirp->id }}/edit" class="btn btn-ghost btn-xs">
                                        Edit
                                    </a>

                                    <form method="POST" action="/chirps/{{ $chirp->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            onclick="return confirm('Are you sure you want to delete this chirp?')"
                                            class="btn btn-ghost btn-xs text-error"
                                        >
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endcan
                        </div>
                    </div>
                </div>
            @empty
                <div class="hero py-12">
                    <div class="hero-content text-center">
                        <div>
                            <p class="mt-4 text-base-content/60">
                                No chirps yet. Be the first to chirp!
                            </p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>