import openai
import sys

openai.organization = "org-VevTxB4XogkXjsvslr60Xacl"
openai.api_key = "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"


import pandas as pd
import re
from youtube_transcript_api import YouTubeTranscriptApi


def transcripting(url):
    # video_id = url.lstrip("https://www.youtube.com/watch?v=")
    video_id = url[32:]
    a = YouTubeTranscriptApi.get_transcript(video_id)
    df = pd.DataFrame(a)
    df = df.drop(["start", "duration"], axis=1)
    c = df.values.tolist()
    listToStr = ""
    for elem in c:
        for e in elem:
            # print(e)
            listToStr = listToStr + " " + e
    return listToStr


text = transcripting(
    sys.argv[1]
    # "https://www.youtube.com/watch?v=ad79nYk2keg"
)  # https://www.youtube.com/watch?v=rRXaTyVzHz8

cont = []
cont.append(text[:10000])
prompt = (
    """Write only 5 questions as multiple choices containing 4 options with correct answer using only the following text.

"""
    + cont[0]
)
# print(prompt)
model = "text-davinci-003"  # "gpt-3.5-turbo"
# response = openai.ChatCompletion.create(engine=model,prompt=prompt,max_tokens=50)
response = openai.Completion.create(engine=model, prompt=prompt, max_tokens=1500)

generated_text = response.choices[0].text

with open("b.txt", "w") as sys.stdout:
    print(generated_text)

with open("b.txt", "r+") as fp:
    # read an store all lines into list
    lines = fp.readlines()
    # move file pointer to the beginning of a file
    fp.seek(0)
    # truncate the file
    fp.truncate()

    # start writing lines except the first line
    # lines[1:] from line 2 to last line
    fp.writelines(lines[2:])
