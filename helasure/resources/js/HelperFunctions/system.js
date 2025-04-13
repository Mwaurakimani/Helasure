const system = {
    notify(response) {
        let {status, message} = response;
        if (status === 'success') {
            alert(message);
        } else {
            console.log(message);
        }
    }
}

export {system}
