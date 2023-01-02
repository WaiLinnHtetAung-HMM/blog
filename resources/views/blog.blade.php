<x-layout>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
            src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            class="card-img-top"
            alt="..."
          />
          <h3 class="my-3">{{$blog->title}}</h3>
          <div class="mb-3">
            <div>Author - <a href="/author/{{$blog->author->username}}">{{$blog->author->name}}</a></div>
            <div class="badge bg-primary"><a class="text-decoration-none text-white" href="/?category={{$blog->category->slug}}">{{$blog->category->name}}</a></div>
            <div class="text-secondary">{{$blog->created_at->diffForHumans()}}</div>
          </div>
          <p class="lh-md">
            {{$blog->body}}
          </p>
        </div>
      </div>
    </div>

    <x-subscribe />
    <x-blogs-you-may-like :randomBlogs="$randomBlogs" />
</x-layout>