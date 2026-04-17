@extends('front.layout.master')

@section('content')
    <div class="container py-4">

        <h3 class="mb-3">🤖 AI Tutor</h3>

        <div class="card shadow-sm">
            <div class="card-body" id="chatBox" style="height:400px; overflow-y:auto;">
            </div>

            <div class="card-footer">
                <form id="chatForm">
                    @csrf
                    <div class="input-group">
                        <input type="text" id="message" class="form-control" placeholder="Ask your doubt..." required>
                        <button class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    {{-- <script>
        document.getElementById('chatForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            let message = document.getElementById('message').value;
            let chatBox = document.getElementById('chatBox');

            chatBox.innerHTML += `<div><strong>You:</strong> ${message}</div>`;

            document.getElementById('message').value = '';

            const res = await fetch('/ask-ai', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    message
                })
            });

            const data = await res.json();

            chatBox.innerHTML += `<div class="text-primary"><strong>AI:</strong> ${data.reply}</div>`;

            chatBox.scrollTop = chatBox.scrollHeight;
        });
    </script> --}}

    <script>
        document.getElementById('chatForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const input = document.getElementById('message');
            const chatBox = document.getElementById('chatBox');
            const message = input.value.trim();

            if (!message) return;

            // show user message
            chatBox.insertAdjacentHTML('beforeend',
                `<div class="mb-2"><strong>You:</strong> ${escapeHtml(message)}</div>`
            );

            input.value = '';

            try {
                const res = await fetch('/ask-ai', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        message
                    })
                });

                if (!res.ok) {
                    chatBox.insertAdjacentHTML('beforeend',
                        `<div class="text-danger">⚠️ Server error</div>`);
                    return;
                }

                const data = await res.json();

                chatBox.insertAdjacentHTML('beforeend',
                    `<div class="text-primary mb-2"><strong>AI:</strong><br>${formatReply(data.reply)}</div>`
                );

                chatBox.scrollTop = chatBox.scrollHeight;

            } catch (err) {
                chatBox.insertAdjacentHTML('beforeend',
                    `<div class="text-danger">⚠️ Connection error</div>`);
            }
        });

        // escape HTML (security)
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        // preserve line breaks
        function formatReply(text) {
            return escapeHtml(text).replace(/\n/g, "<br>");
        }
    </script>
@endsection
