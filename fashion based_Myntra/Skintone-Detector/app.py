from flask import Flask, request, render_template, url_for
import cv2
import face_detect
import kMeansImgPy
import allotSkinTone

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/process', methods=['POST'])
def process_image():
    img_file = request.files['image']
    img_path = "uploaded_image.jpg"
    img_file.save(img_path)
    image = cv2.imread(img_path)

    # Detect face and extract
    face_extracted = face_detect.detect_face(image)
    
    # Pass extracted face to kMeans and get Max color list 
    colors_list = kMeansImgPy.kMeansImage(face_extracted, n_clusters=3)

    # Allot the actual skinTone to a certain shade and get tone type
    skin_tone_value, tone = allotSkinTone.allotSkin(colors_list)

    return render_template('index.html', colors=colors_list, skin_tone=skin_tone_value, tone=tone)

if __name__ == '__main__':
    app.run(debug=True)
