# I've left some code in comments so that it can be easier if one wants to test and see output at various points. To make things simpler just remove the commented code !

import face_detect
import kMeansImgPy
import cv2
import allotSkinTone


while True:
    img_link = input("Image file name (or press ENTER to use camera): ")

    # If no image link is provided, use the camera to capture the image
    image = None if img_link == '' else cv2.imread(img_link)
    # img_link = input("Image file name : ")
    # image = cv2.imread(img_link)

    # Detect face and extract
    face_extracted = face_detect.detect_face(image)
    # Pass extracted face to kMeans and get Max color list 
    colorsList = kMeansImgPy.kMeansImage(face_extracted)

    print("Main File : ")
    print("Red Component : "+str(colorsList[0]))
    print("Green Component : "+str(colorsList[1]))
    print("Blue Component : "+str(colorsList[2]))

    # Allot the actual skinTone to a certain shade
    allotedSkinToneVal = allotSkinTone.allotSkin(colorsList)
    print("alloted skin tone : ")
    print(allotedSkinToneVal)

    # Algorithm stop code.
    stopQ = input("Stop ? ( y || n ) ")
    if stopQ == 'y':
        break
# import face_detect
# import kMeansImgPy
# import allotSkinTone
# import cv2

# while True:
#     img_link = input("Image file name (or press ENTER to use camera): ")

#     # If no image link is provided, use the camera to capture the image
#     image = None if img_link == '' else cv2.imread(img_link)

#     try:
#         # Detect face and extract
#         face_extracted = face_detect.detect_face(image)

#         # Pass extracted face to kMeans and get Max color list
#         colorsList = kMeansImgPy.kMeansImage(face_extracted)

#         print("Main File:")
#         print("Red Component:", colorsList[0])
#         print("Green Component:", colorsList[1])
#         print("Blue Component:", colorsList[2])

#         # Allot the actual skin tone to a certain shade
#         allotedSkinToneVal = allotSkinTone.allotSkin(colorsList)
#         print("Alloted skin tone:", allotedSkinToneVal)

#     except Exception as e:
#         print(f"Error: {e}")

#     # Algorithm stop code
#     stopQ = input("Stop? (y/n): ")
#     if stopQ.lower() == 'y':
#         break

