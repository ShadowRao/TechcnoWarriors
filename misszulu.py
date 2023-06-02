import cv2
from flask import Flask, Response, render_template

app = Flask(__name__)

def generate_frames():
    video_path = 'path/to/your/video.mp4'  # Replace with your video file path
    video = cv2.VideoCapture(video_path)

    while video.isOpened():
        ret, frame = video.read()
        if not ret:
            break

        # Convert the frame to JPEG format
        ret, buffer = cv2.imencode('.jpg', frame)
        frame = buffer.tobytes()

        # Yield the frame as a byte stream
        yield (b'--frame\r\n'
               b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n\r\n')

    video.release()

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/video_feed')
def video_feed():
    return Response(generate_frames(), mimetype='multipart/x-mixed-replace; boundary=frame')

if __name__ == '__main__':
    app.run(debug=True)
