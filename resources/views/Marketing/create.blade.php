<div>
    <form action="/marketings" method="POST">
        @csrf
        <input type="text" name="branch" placeholder="branch">
        <input type="text" name="item" placeholder="item">
        <input type="text" name="purpose" placeholder="purpose">
        <input type="text" name="requestor" placeholder="requestor">
        <input type="number" name="quantity" placeholder="quantity">
        <input type="date" name="date_received" placeholder="date_received">
        <input type="status" name="status" placeholder="status">
        <button type="submit">Submit</button>
    </form>
    <a href="/marketings">Index</a>
</div>