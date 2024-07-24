# # I've left some code in comments so that it can be easier if one wants to test and see output at various points. To make things simpler just remove the commented code !

# def detect_face(img):
#     import cv2
#     camera = cv2.VideoCapture(0)

#     return_value, image= camera.read()
#     cv2.imwrite('opencv.png',image)
#     del(camera)

#     cascPath = "haarcascade_frontalface_default.xml"

#     # Create haar cascade

#     faceCascade = cv2.CascadeClassifier(cascPath)

#     return_value, image = camera.read()
#     image = img

#     input("Press ENTER looking at the camera to capture your image !")
#     cv2.imwrite('opencv.png', image)


#     gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)

#     # Detect faces
#     faces = faceCascade.detectMultiScale(
#         gray,
#         scaleFactor=1.1,
#         minNeighbors=5,
#         minSize=(30,30)
#     )

#     print("Found {0} faces !".format(len(faces)))

#     # Draw rect around faces
#     for(x,y,w,h) in faces:
#         cv2.rectangle(image, (x,y),(x+w,y+h),(255,255,255),0)

#     x = faces[1][0]
#     y = faces[1][1]
#     w = faces[1][2]
#     h = faces[1][3]

#     print("x :: "+str(x)+"|| y :: "+str(y)+"|| w :: "+str(w)+"|| h :: "+str(h))

#     sub_face = image[y:y+h, x:x+w]

#     FaceFileName = "unknownfaces/face_" + str(y) + ".jpg"
#     cv2.imwrite(FaceFileName, sub_face)
#     print('Saved image !')
#     cv2.imshow("Face crop", sub_face)
#     camera.release
#     cv2.imshow("Faces found",image)
#     cv2.waitKey(0)
#     del(cv2)
#     return sub_face

import cv2

def detect_face(img=None):
    camera = None
    
    # Check if the input image is provided, otherwise use the camera
    if img is None:
        camera = cv2.VideoCapture(0)
        if not camera.isOpened():
            raise Exception("Could not open video device")
        input("Press ENTER looking at the camera to capture your image!")
        return_value, img = camera.read()
        if not return_value:
            camera.release()
            raise Exception("Failed to capture image")
    else:
        # If img is provided, ensure it's properly read
        img = cv2.imread(img) if isinstance(img, str) else img
        if img is None:
            raise Exception("Could not read the image file")
    
    # Save the captured image
    cv2.imwrite('opencv.png', img)
    
    # Load the cascade
    cascPath = "haarcascade_frontalface_default.xml"
    faceCascade = cv2.CascadeClassifier(cv2.data.haarcascades + cascPath)
    
    # Convert to grayscale
    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
    
    # Detect faces
    faces = faceCascade.detectMultiScale(
        gray,
        scaleFactor=1.1,
        minNeighbors=5,
        minSize=(30, 30)
    )

    print("Found {0} faces!".format(len(faces)))

    if len(faces) == 0:
        if camera:
            camera.release()
        raise Exception("No faces found")

    # Draw rectangle around the first detected face
    x, y, w, h = faces[0]
    cv2.rectangle(img, (x, y), (x+w, y+h), (255, 255, 255), 2)
    
    print("x :: "+str(x)+"|| y :: "+str(y)+"|| w :: "+str(w)+"|| h :: "+str(h))

    # Extract the face
    sub_face = img[y:y+h, x:x+w]

    FaceFileName = "unknownfaces/face_" + str(y) + ".jpg"
    cv2.imwrite(FaceFileName, sub_face)
    print('Saved image!')
    
    # Show the cropped face and the image with rectangles
    cv2.imshow("Face crop", sub_face)
    cv2.imshow("Faces found", img)
    cv2.waitKey(0)
    cv2.destroyAllWindows()
    
    if camera:
        camera.release()
    
    return sub_face
