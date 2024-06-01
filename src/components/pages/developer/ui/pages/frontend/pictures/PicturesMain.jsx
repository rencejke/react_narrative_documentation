import React from "react";
import SpinnerFetching from "../../../../../../partials/spinners/SpinnerFetching";
import Markdown  from "react-markdown";
import remarkGfm from 'remark-gfm'
import NoData from "../../../../../../partials/NoData";
import NoInformation from "../../../../../../partials/NoInformation";

const PicturesMain = ({ isLoading, isFetching, pictures }) => {
  return (
    <main className="w-full pt-[70px]">
      <div className="container">
        <div className="content pictures pt-[100px] pb-[30px]">

          {isFetching && <SpinnerFetching />}
        {pictures?.data.length === 0 && (
        <NoInformation/>)}
          {pictures?.data.map((item, key) => (
            item.pictures_is_active === 1 && item.pictures_aid === 1 && (
              <Markdown key={key} remarkPlugins={[remarkGfm]}>{item.pictures_article}</Markdown>
            )
          ))}
        </div>

        <div className="grid grid-cols-2 gap-4">
        {pictures?.data.map((item, key) => (
        item.pictures_is_active === 1 && item.pictures_aid === 2 && (
        <Markdown key={key} remarkPlugins={[remarkGfm]}>{item.pictures_article}</Markdown>
        )
      ))}
</div>
<div className="text-center">

        {pictures?.data.map((item, key) => (
        item.pictures_aid === 3 && (
        <Markdown key={key} remarkPlugins={[remarkGfm]}>{item.pictures_article}</Markdown>
        )
      ))}
      </div>

      <div className="content pictures pt-[20px] pb-[30px]">

{pictures?.data.map((item, key) => (
  item.pictures_is_active === 1 && item.pictures_aid === 4 && (
    <Markdown key={key} remarkPlugins={[remarkGfm]}>{item.pictures_article}</Markdown>
  )
))}
</div>

      <div className="grid grid-cols-2 gap-4">
        {pictures?.data.map((item, key) => (
        item.pictures_is_active === 1 && item.pictures_aid === 5 && (
        <Markdown key={key} remarkPlugins={[remarkGfm]}>{item.pictures_article}</Markdown>
        )
      ))}
    </div>

    <div className="text-center">

        {pictures?.data.map((item, key) => (
        item.pictures_aid === 6 && (
        <Markdown key={key} remarkPlugins={[remarkGfm]}>{item.pictures_article}</Markdown>
        )
      ))}
      </div>
      </div>
    
    </main>
  );
};

export default PicturesMain
