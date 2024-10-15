import './bootstrap';

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
    wsHost: import.meta.env.VITE_PUSHER_HOST,
    wsPort: import.meta.env.VITE_PUSHER_PORT,
    wssPort: import.meta.env.VITE_PUSHER_PORT,
    forceTLS: true,
    encrypted: true,
    disableStats: true,
    enabledTransports: ['ws'],
})

window.Echo.channel('user-channel')
    .listen('UserCreated', (e) => {
        alert(e.toString())
    })

window.Echo.channel('product-channel')
    .listen('ProductCreated', (e) => {
        alert(e.toString())
    })
