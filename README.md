## Security in Laravel

1. SQL Injection (SQLi)
   - Never use raw queries. Use Eloquent instead.
   - If you have to, then use it with binding (?).
2. Policies
3. Validation
   - Always validate inputs.
   - `$request->validate($rules)`
   - FormRequest
