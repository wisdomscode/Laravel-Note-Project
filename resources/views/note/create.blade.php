<x-app-layout>
    <div class="note-container single-note">
        <h1>Create new Note</h1>

        <form action="{{ route('note.store') }}" class="note" method="POST">
            @csrf
            <textarea name="note" id="" class="note-body" cols="30" rows="10" placeholder="Enter your note here"></textarea>
            <div class="note-button">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
