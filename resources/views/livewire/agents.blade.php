<section class="mt-5">
  <h1>Agents</h1>
  <div class="table-responsive">
    <table class="table table-sm table-striped table-hover">
      <thead>
        <tr>
          <th class="px-4 py-3">S/N</th>
          <th class="px-4 py-3">NAME</th>
          <th class="px-4 py-3">PHONE NUMBER</th>
          <th class="px-4 py-3">STATUS</th>
          <th class="px-4 py-3">DATE ADDED</th>
          <th class="px-4 py-3">ACTIONS</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($agents as $key => $agent)
          <tr>
            <td class="px-4 py-3">{{ $agents->firstItem() + $key }}</td>
            <td class="px-4 py-3">{{ $agent->name }}</td>
            <td class="px-4 py-3">{{ $agent->phone }}</td>
            <td class="px-4 py-3">
              <button wire:click="verify({{ $agent->id }})">
                @if ($agent->verified == 0)
                  <x-admin.pending message="Pending" />
                @elseif ($agent->verified == 1)
                  <x-admin.verified message="Verified" />
                @endif
              </button>
            </td>
            <td class="px-4 py-3">{{ $agent->created_at }}</td>
            <td class="px-4 py-3">
              <button class="btn btn-sm">
                <x-pencil />
              </button>

              <button class="btn btn-sm">
                <x-trash />
              </button>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>

    {{ $agents->links() }}
  </div>
</section>
