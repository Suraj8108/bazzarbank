# BazzarBank - Portal for UPI Transactions 💳📲

## Project Description 📄
BazzarBank is an application that manages account holder payments and tracks them for future reference. It provides a seamless and secure way to handle UPI transactions.

## Libraries Dependency 📚
- **RazorPay Payment Gateway**: Integrated for handling secure and efficient payment transactions.

## Demo Video 🎥
Check out the demo video of the application on LinkedIn.
<iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6810547385635225600" height="711" width="504" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>

## Features ✨
- **Secure Payments**: Ensures all transactions are secure and encrypted.
- **Transaction Tracking**: Keeps a record of all transactions for future reference.
- **User-Friendly Interface**: Easy to navigate and use for all account holders.
- **Real-Time Notifications**: Get instant notifications for all transactions.

## Getting Started 🛠️
### Prerequisites
- Node.js
- RazorPay API Key

### Installation
1. **Clone the repository**:
    ```bash
    git clone https://github.com/yourusername/BazzarBank.git
    cd BazzarBank
    ```

2. **Install dependencies**:
    ```bash
    composer install
    ```

3. **Set up environment variables**:
    - Copy the `.env.example` file to `.env`:
        ```bash
        cp .env.example .env
        ```
    - Update the `.env` file with your database and RazorPay API credentials.

4. **Generate application key**:
    ```bash
    php artisan key:generate
    ```

5. **Run database migrations**:
    ```bash
    php artisan migrate
    ```

6. **Serve the application**:
    ```bash
    php artisan serve
    ```
