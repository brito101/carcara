$("#actionPost").on("submit",(function(a){a.preventDefault();const n=$(this).attr("action");$.ajax({url:n,method:"POST",data:new FormData(this),dataType:"JSON",contentType:!1,cache:!1,processData:!1,success:function(a){$("#actionPost").trigger("reset"),alert(a.message)},error:function(a){}})}));let content=null;function ajaxCall(){$.ajax({type:"GET",url:$('meta[name="ajaxCall"]').attr("content"),success:function(a){let n=a.actions;$("#actions").empty(),n.forEach((a=>{content=a.full_image?`<div class="post">\n                    <div class="user-block">\n                        <img src="${a.user_photo}" class="img-circle img-bordered-sm" style="width: 33.6px; height: 33.6px; object-fit: cover;" alt="${a.user_name}">\n                        <span class="float-right btn btn-danger actionTrash"\n                                    data-action="${a.delete_action}">\n                                    <i class="fa fa-trash"></i></span>\n                        <span class="username">\n                            <span>${a.user_name}</span>\n                        </span>\n                        <span class="description">Enviado em ${a.date}</span>\n                        </div>\n                        <p>${a.text}</p>\n                                <div class="col-12 form-group px-0 d-flex flex-wrap justify-content-start">\n                                    <div class="col-12 p-2 card">\n                                        <div class="card-body d-flex justify-content-center align-items-center">\n                                            <img class="img-fluid"\n                                                src="${a.full_image}"\n                                                alt="">\n                                        </div>\n                                    </div>\n                </div></div>`:`<div class="post">\n                    <div class="user-block">\n                        <img src="${a.user_photo}" class="img-circle img-bordered-sm" style="width: 33.6px; height: 33.6px; object-fit: cover;" alt="${a.user_name}">\n                        <span class="float-right btn btn-danger actionTrash"\n                                    data-action="${a.delete_action}">\n                                    <i class="fa fa-trash"></i></span>\n                        <span class="username">\n                            <span>${a.user_name}</span>\n                        </span>\n                        <span class="description">Enviado em ${a.date}</span>\n                        </div>\n                        <p>${a.text}</p>\n                </div>`,$("#actions").append(content)}))},error:function(){}})}setInterval(ajaxCall,1e4),$("#actions").on("click",".actionTrash",(function(a){a.preventDefault();let n=$(a.currentTarget).data("action");$.ajax({type:"delete",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},url:n,success:function({message:a}){a&&alert(a)},error:function(){alert("Falha ao excluir a ação.")},complete:function(){$(a.currentTarget).parent().parent().remove()}})}));