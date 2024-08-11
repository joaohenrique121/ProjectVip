export default function ajax({
                                 method,
                                 url,
                                 data,
                                 dataType = "json",
                                 success,
                                 error = (jqXHR, textStatus, errorThrown) => {
                                     console.error('AJAX Error:', jqXHR, textStatus, errorThrown);
                                 }
                             }){

    const csrfToken = $('meta[name=csrf-token]').attr('content');

  return $.ajax({
        type: method,
        url: url,
        data: data,
        dataType: dataType,
        headers:{
            'X-CSRF-TOKEN': csrfToken
        },
        success: success,
        error: error
    });
}