import {ref} from "vue";

const isIntervalRunning = ref(false); // Tracks whether the interval is running
let intervalId = null; // Holds the interval ID


const setMessages = (messageBag = null) => {
    if (messageBag == null) {
        return {
            id: Date.now(),
            sender: 'User',
            initial: 'U',
            text: `Message sent at ${new Date().toLocaleTimeString()}`,
            time: new Date().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'}),
        }
    } else {
        return {
            id: Date.now(),
            sender: 'User',
            initial: 'U',
            text: messageBag,
            time: new Date().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'}),
        }
    }
}

const startInterval = callBack => {
    if (!isIntervalRunning.value) {
        intervalId = setInterval(() => {
            callBack();
        }, 5000);
        isIntervalRunning.value = true;
    }
};

const stopInterval = () => {
    if (isIntervalRunning.value) {
        clearInterval(intervalId);
        isIntervalRunning.value = false;
    }
};

export {
    isIntervalRunning,

    setMessages,
    startInterval,
    stopInterval,
}
