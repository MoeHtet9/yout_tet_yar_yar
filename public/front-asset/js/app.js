const data=[
 {title:"Docker for Beginners",cat:"DevOps",img:"images/docker.jpg"},
 {title:"JavaScript Date Explained",cat:"JavaScript",img:"images/js.jpg"},
 {title:"My Full Stack Roadmap",cat:"Career",img:"images/roadmap.jpg"}
];

$.each(data,(i,p)=>{
 $("#posts").append(`
 <div class="col-md-4">
   <div class="card h-100">
     <img src="${p.img}" class="card-img-top">
     <div class="card-body">
       <span class="tag">${p.cat}</span>
       <h5 class="mt-2">${p.title}</h5>
       <a href="#" class="text-primary text-decoration-none">Read More →</a>
     </div>
   </div>
 </div>`);
});