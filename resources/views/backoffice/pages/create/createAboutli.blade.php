
<div class="container">
  <h1>Modifier la liste à puce de la page home</h1>

  <table class="table">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>

          {{-- @foreach ($ as $item) --}}
              <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>

                  <td>
                    <form action="" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>

                <td>
                    <a class="btn btn-success" href="">show</a>
                </td>
              </tr>
          {{-- @endforeach --}}
      </tbody>
    </table>
</div>