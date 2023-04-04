<div class="w-[40%] pl-4 bg-white rounded-md border-[1.5px] focus-within:border-[1.5px] focus-within:border-blue-200 my-4">
  <form action="" method="post" class="flex justify-between">
    @csrf
    <input type="text" placeholder="Tìm kiếm..." name="users-search" class="caret-blue-500 rounded-md outline-none w-full bg-white" required>
      <button type="submit" class="inline-block mr-4 mt-2">
        {{-- <i class="fa-solid fa-magnifying-glass text-slate-500"></i> --}}
        <lord-icon
          src="https://cdn.lordicon.com/zniqnylq.json"
          trigger="click"
          style="width:24px;height:24px">
      </lord-icon>
      </button>
  </form>
</div>
