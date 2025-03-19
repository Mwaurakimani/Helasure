import axios from 'axios';

// Set up Axios for HTTP requests
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Import Echo for broadcasting
import './echo';
//
// // Bind to the connection and error events for debugging
// window.Echo.connector.pusher.connection.bind('connected', () => {
//     console.log("WebSocket connected successfully!");
// });
//
// window.Echo.connector.pusher.connection.bind('error', (err) => {
//     console.error("Error connecting to Echo:", err);
// });
//
// // Listen to the 'playground' channel

