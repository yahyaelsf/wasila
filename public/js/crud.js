function destroy(id, reference, url) {
    Swal.fire({
        title: 'هل انت متاكد ؟',
        text: "لن تكون قادر على ارجاع العنصر!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'نعم , احذفه!',
        cancelButtonText : 'إلغاء الحذف'
    }).then((result) => {
        if (result.isConfirmed) {
            deleteItem(id, reference, url);
        }
    })
}

function deleteItem(id, reference, url) {
    axios.delete(url + id)
        .then(function (response) {
            // handle success
            console.log(response);
            showMessage(response.data);
            reference.closest('tr').remove();
        })
        .catch(function (error) {
            // handle error
            console.log(error);
            showMessage(error.response.data);
        })
}

function showMessage(data) {
    Swal.fire({
        // position: 'top-end',
        icon: data.icon,
        title: data.title,
        showConfirmButton: false,
        timer: 1500
    })
}

function store(url, data) {
    axios.post(url, data).then(function (response) {
        console.log(response);
        // handle success
        toastr.success(response.data.message)
        document.getElementById('reset-form').reset();
    }).catch(function (error) {
        console.log(error)
        toastr.error(error.response.data.message)

    })
}
function update(url, data, redirectRoute) {
    axios.put(url, data).then(function (response) {
        // handle success
        console.log(response);
        if (redirectRoute != undefined) {
            window.location.href = redirectRoute;
        } else {
            toastr.success(response.data.message)
        }
    }).catch(function (error) {
        // handle error
        console.log(error);
        toastr.error(error.response.data.message)
    })
}
